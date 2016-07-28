<?
$subject_val = "[OMPI users] Openmpi 1.10.1: BUG in orterun.c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 09:42:47 2015" -->
<!-- isoreceived="20151201144247" -->
<!-- sent="Tue, 1 Dec 2015 15:42:41 +0100" -->
<!-- isosent="20151201144241" -->
<!-- name="Stefano Garzarella" -->
<!-- email="s.garzarella_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi 1.10.1: BUG in orterun.c" -->
<!-- id="565DB1E1.8070905_at_evidence.eu.com" -->
<!-- charset="utf-8" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] Openmpi 1.10.1: BUG in orterun.c<br>
<strong>From:</strong> Stefano Garzarella (<em>s.garzarella_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-01 09:42:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel] Openmpi 1.10.1: BUG in orterun.c"</a>
<li><strong>Previous message:</strong> <a href="28125.php">CUDENNEC Loic: "[OMPI users] [ICCS/Alchemy] CFP Architecture, Languages, Compilation and Hardware support for Emerging ManYcore systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel] Openmpi 1.10.1: BUG in orterun.c"</a>
<li><strong>Reply:</strong> <a href="28127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel] Openmpi 1.10.1: BUG in orterun.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
I'm using OpenMPI 1.10.1 with gasnet and ompss @ cluster on Ubuntu 
<br>
14.04.3 (linux 3.19.0-33).
<br>
<p>When I launch mpirun, I need to pass some (ompss/nanos++) environment 
<br>
variable like NX_ARGS
<br>
in the following way:
<br>
export NX_ARGS=&quot;--verbose --cluster --cluster-network=mpi&quot;
<br>
mpirun -np 2 -hostfile myhostfile -x NX_ARGS -x LD_PRELOAD testapp
<br>
<p>I saw that NX_ARGS is not passed and I found the problem in the 
<br>
orte/tools/orterun/orterun.c file.
<br>
In line 1739, after use getenv(), you check if there is '=' in the 
<br>
string. If it's true,
<br>
you assumed that the string is in the form 'param'='value', but in this 
<br>
case fails, because
<br>
getenv() POSIX specification always returns a pointer to the value
<br>
in the environment, without &quot;param=&quot;.
<br>
<p>The following patch solve this problem for OpenMPI 1.10.1:
<br>
--- orte/tools/orterun/orterun.c.orig    2015-12-01 15:14:27.798014356 +0100
<br>
+++ orte/tools/orterun/orterun.c    2015-12-01 15:15:12.574013555 +0100
<br>
@@ -1736,17 +1736,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value = getenv(param);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != value) {
<br>
-                    if (NULL != strchr(value, '=')) {
<br>
- opal_argv_append_nosize(&amp;app-&gt;env, value);
<br>
-                        /* save it for any comm_spawn'd apps */
<br>
- opal_argv_append_nosize(&amp;orte_forwarded_envars, value);
<br>
-                    } else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asprintf(&amp;value2, &quot;%s=%s&quot;, param, value);
<br>
opal_argv_append_nosize(&amp;app-&gt;env, value2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* save it for any comm_spawn'd apps */
<br>
opal_argv_append_nosize(&amp;orte_forwarded_envars, value2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(value2);
<br>
-                    }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;Warning: could not find 
<br>
environment variable \&quot;%s\&quot;\n&quot;, param);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>I noticed that the development repo (<a href="https://github.com/open-mpi/ompi">https://github.com/open-mpi/ompi</a>) 
<br>
doesn't have this bug, but the
<br>
release repo (<a href="https://github.com/open-mpi/ompi-release">https://github.com/open-mpi/ompi-release</a>) has this bug and 
<br>
I send a pull request to solve it.
<br>
(<a href="https://github.com/open-mpi/ompi-release/pull/792">https://github.com/open-mpi/ompi-release/pull/792</a>)
<br>
<p>Cheers,
<br>
Stefano
<br>
<p><pre>
--
Stefano Garzarella
Software Engineer
Evidence Srl
<a href="http://www.evidence.eu.com">http://www.evidence.eu.com</a>
Via Carducci 56 - Localita' Ghezzano
56010 S.Giuliano Terme Pisa - Italy
Phone: +39 050 99 11 122
Fax: +39 050 99 10 812
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel] Openmpi 1.10.1: BUG in orterun.c"</a>
<li><strong>Previous message:</strong> <a href="28125.php">CUDENNEC Loic: "[OMPI users] [ICCS/Alchemy] CFP Architecture, Languages, Compilation and Hardware support for Emerging ManYcore systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel] Openmpi 1.10.1: BUG in orterun.c"</a>
<li><strong>Reply:</strong> <a href="28127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel] Openmpi 1.10.1: BUG in orterun.c"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
