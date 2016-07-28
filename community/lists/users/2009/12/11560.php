<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 22:41:21 2009" -->
<!-- isoreceived="20091217034121" -->
<!-- sent="Thu, 17 Dec 2009 16:41:06 +1300" -->
<!-- isosent="20091217034106" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="65f1a86ddbd88fdf04203323ce2f3d12.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="c2afb15e688f6d7d6ad494d6d555b197.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pointers for understanding failure messages on NetBSD<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Pointers%20for%20understanding%20failure%20messages%20on%20NetBSD"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-12-16 22:41:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11561.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11559.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="11505.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11561.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11561.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Just to say that I built the NetBSD OpenMPI 1.4 port from the CVS,
</span><br>
<span class="quotelev1">&gt; so includsing all the recent work and get the exmaples to run, albeit
</span><br>
<span class="quotelev1">&gt; still with the:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_sockaddr2str failed:Unknown error (return code 4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; non-fatal errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As promised, I'll do bit more digging into this.
</span><br>
<p>Here's the result of me &quot;fancying a dig&quot;:
<br>
<p>The software I was adding on top of OpenMPI, initially PETSc, and
<br>
above that PISM, has exhibited errors when run within an SGE/OpenMPI
<br>
environment when FOUR or EIGHT processors are used, but not TWO
<br>
<p>The codes run when 2 or 4 processes are run on a single machine
<br>
outside of SGE.
<br>
<p><p>I added a bit of debugging code into the
<br>
<p>opal/util/net.c:opal_net_get_hostname()
<br>
<p>routine.
<br>
<p>--- opal-util-net.c.000 2009-12-17 13:55:18.000000000 +1300
<br>
+++ opal-util-net.c     2009-12-17 14:24:08.000000000 +1300
<br>
@@ -369,6 +369,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>+    /* KMB */
<br>
+    opal_output(0, &quot;KMB: addr.sa_len %d, addr-&gt;sa_family %d, addrlen %d\n&quot;,
<br>
+               addr-&gt;sa_len, addr-&gt;sa_family, addrlen ) ;
<br>
+    /* KMB */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = getnameinfo(addr, addrlen,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name, NI_MAXHOST, NULL, 0, NI_NUMERICHOST);
<br>
<p><p>Here's what I see, from stderr, when running the SkaMPI 5 test:
<br>
<p>&nbsp;skampi -i ski/skampi_pt2pt.ski
<br>
<p>across a 4-node SGE submission.
<br>
<p>The SkaMPI test runs through by the way.
<br>
<p>[khmer.ecs.vuw.ac.nz:09293] KMB: addr.sa_len 16, addr.sa_family 2 addrlen 16
<br>
[khmer.ecs.vuw.ac.nz:09293] KMB: addr.sa_len 16, addr.sa_family 2 addrlen 16
<br>
[khmer.ecs.vuw.ac.nz:09293] KMB: addr.sa_len 16, addr.sa_family 2 addrlen 16
<br>
[khmer.ecs.vuw.ac.nz:09293] KMB: addr.sa_len 16, addr.sa_family 2 addrlen 16
<br>
[khmer.ecs.vuw.ac.nz:09293] KMB: addr.sa_len 16, addr.sa_family 2 addrlen 16
<br>
[matterhorn.ecs.vuw.ac.nz:09698] KMB: addr.sa_len 16, addr.sa_family 2
<br>
addrlen 16
<br>
[matterhorn.ecs.vuw.ac.nz:09698] KMB: addr.sa_len 16, addr.sa_family 2
<br>
addrlen 16
<br>
[kipp-cafe.ecs.vuw.ac.nz:27796] KMB: addr.sa_len 16, addr.sa_family 2
<br>
addrlen 16
<br>
[kipp-cafe.ecs.vuw.ac.nz:27796] KMB: addr.sa_len 16, addr.sa_family 2
<br>
addrlen 16
<br>
[old-bailey.ecs.vuw.ac.nz:27294] KMB: addr.sa_len 16, addr.sa_family 2
<br>
addrlen 16
<br>
[old-bailey.ecs.vuw.ac.nz:27294] KMB: addr.sa_len 16, addr.sa_family 2
<br>
addrlen 16
<br>
[khmer.ecs.vuw.ac.nz:14828] KMB: addr.sa_len 16, addr.sa_family 2 addrlen 16
<br>
[kipp-cafe.ecs.vuw.ac.nz:25231] KMB: addr.sa_len 16, addr.sa_family 2
<br>
addrlen 16
<br>
[matterhorn.ecs.vuw.ac.nz:06159] KMB: addr.sa_len 16, addr.sa_family 2
<br>
addrlen 16
<br>
[old-bailey.ecs.vuw.ac.nz:28315] KMB: addr.sa_len 16, addr.sa_family 2
<br>
addrlen 16
<br>
[khmer.ecs.vuw.ac.nz:14828] KMB: addr.sa_len 0, addr.sa_family 2 addrlen 16
<br>
[khmer.ecs.vuw.ac.nz:14828] opal_sockaddr2str failed:Temporary failure in
<br>
name resolution (return code 4)
<br>
[matterhorn.ecs.vuw.ac.nz:06159] KMB: addr.sa_len 0, addr.sa_family 2
<br>
addrlen 16
<br>
[kipp-cafe.ecs.vuw.ac.nz:25231] KMB: addr.sa_len 0, addr.sa_family 2
<br>
addrlen 16
<br>
[matterhorn.ecs.vuw.ac.nz:06159] opal_sockaddr2str failed:Temporary
<br>
failure in name resolution (return code 4)
<br>
[kipp-cafe.ecs.vuw.ac.nz:25231] opal_sockaddr2str failed:Temporary failure
<br>
in name resolution (return code 4)
<br>
[khmer.ecs.vuw.ac.nz:14828] KMB: addr.sa_len 0, addr.sa_family 2 addrlen 16
<br>
[khmer.ecs.vuw.ac.nz:14828] opal_sockaddr2str failed:Unknown error (return
<br>
code 4)
<br>
[kipp-cafe.ecs.vuw.ac.nz:25231] KMB: addr.sa_len 0, addr.sa_family 2
<br>
addrlen 16
<br>
[kipp-cafe.ecs.vuw.ac.nz:25231] opal_sockaddr2str failed:Unknown error
<br>
(return code 4)
<br>
[old-bailey.ecs.vuw.ac.nz:28315] KMB: addr.sa_len 0, addr.sa_family 2
<br>
addrlen 16
<br>
[old-bailey.ecs.vuw.ac.nz:28315] opal_sockaddr2str failed:Temporary
<br>
failure in name resolution (return code 4)
<br>
[khmer.ecs.vuw.ac.nz:14828] KMB: addr.sa_len 0, addr.sa_family 2 addrlen 16
<br>
[khmer.ecs.vuw.ac.nz:14828] opal_sockaddr2str failed:Unknown error (return
<br>
code 4)
<br>
[matterhorn.ecs.vuw.ac.nz:06159] KMB: addr.sa_len 0, addr.sa_family 2
<br>
addrlen 16
<br>
[matterhorn.ecs.vuw.ac.nz:06159] opal_sockaddr2str failed:Unknown error
<br>
(return code 4)
<br>
[kipp-cafe.ecs.vuw.ac.nz:25231] KMB: addr.sa_len 0, addr.sa_family 2
<br>
addrlen 16
<br>
[kipp-cafe.ecs.vuw.ac.nz:25231] opal_sockaddr2str failed:Unknown error
<br>
(return code 4)
<br>
[khmer.ecs.vuw.ac.nz:14828] KMB: addr.sa_len 16, addr.sa_family 2 addrlen 16
<br>
[matterhorn.ecs.vuw.ac.nz:06159] KMB: addr.sa_len 16, addr.sa_family 2
<br>
addrlen 16
<br>
[kipp-cafe.ecs.vuw.ac.nz:25231] KMB: addr.sa_len 16, addr.sa_family 2
<br>
addrlen 16
<br>
[old-bailey.ecs.vuw.ac.nz:28315] KMB: addr.sa_len 16, addr.sa_family 2
<br>
addrlen 16
<br>
<p><p>You'll notice that at least one &quot;addr&quot; that is making it's way into
<br>
<p>opal_net_get_hostname
<br>
<p>has an sa_len of zero and that that is what seems to be triggering
<br>
the
<br>
<p>opal_sockaddr2str
<br>
<p>messages.
<br>
<p>I was wondering whether this was coming out of the IPv6 getifaddr
<br>
loop, as I thought I'd set everything explictly in the munged IPv4
<br>
stanza.
<br>
<p>I'd like to &quot;tidy up&quot; those messages, if only because failing with
<br>
bith an unknown error and a temporay failure doesn't seem right !
<br>
<p>Any thoughts welcome,
<br>
Kevin
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11561.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11559.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="11505.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11561.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11561.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
