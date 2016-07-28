<?
$subject_val = "Re: [hwloc-users] Assembling multiple node XMLs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 13:35:44 2015" -->
<!-- isoreceived="20151030173544" -->
<!-- sent="Fri, 30 Oct 2015 13:35:39 -0400" -->
<!-- isosent="20151030173539" -->
<!-- name="Andrej Prsa" -->
<!-- email="aprsa09_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Assembling multiple node XMLs" -->
<!-- id="20151030133539.1160f101_at_antares" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20151030141958.GE2831_at_var.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Assembling multiple node XMLs<br>
<strong>From:</strong> Andrej Prsa (<em>aprsa09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-30 13:35:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1221.php">Samuel Thibault: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Previous message:</strong> <a href="1219.php">Samuel Thibault: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>In reply to:</strong> <a href="1219.php">Samuel Thibault: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1221.php">Samuel Thibault: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Reply:</strong> <a href="1221.php">Samuel Thibault: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel,
<br>
<p><span class="quotelev3">&gt; &gt; &gt; Can you have a startup script set
</span><br>
<span class="quotelev3">&gt; &gt; &gt; HWLOC_XMLFILE=/common/path/${hostname}.xml in the system-wide
</span><br>
<span class="quotelev3">&gt; &gt; &gt; environment?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That's precisely what I'd been trying, but it proved exceedingly
</span><br>
<span class="quotelev2">&gt; &gt; difficult to figure out what environment file is read when mpirun is
</span><br>
<span class="quotelev2">&gt; &gt; run directly, when torque runs the job, etc. It seems that neither
</span><br>
<span class="quotelev2">&gt; &gt; bashrc nor profile do the job, so I'm now exploring possibilities
</span><br>
<span class="quotelev2">&gt; &gt; for ssh environment variable injection... I'll keep digging, thanks
</span><br>
<span class="quotelev2">&gt; &gt; a lot for your help and pointers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps running something like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec sh -c &quot;/usr/bin/env
</span><br>
<span class="quotelev1">&gt; HWLOC_XMLFILE=/common/path/\${hostname}.xml theapplication&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<p>Thanks for the suggestion. I tried:
<br>
<p>mpirun --prefix /opt/openmpi-1.10.0 --hostfile node1 -np 44 sh -c
<br>
&quot;/usr/bin/env HWLOC_XMLFILE=/etc/hwloc_\${hostname}.xml python
<br>
testmpi.py&quot;
<br>
<p>and:
<br>
<p>mpirun --prefix /opt/openmpi-1.10.0 --hostfile node1 -np 44 sh -c
<br>
&quot;/usr/bin/env HWLOC_XMLFILE=/etc/hwloc_`hostname`.xml python testmpi.py&quot;
<br>
<p>and neither worked. It seems to me that the environment is driven by
<br>
ssh and, even though the docs say that non-interactive shells should
<br>
read /etc/profile, mpirun via ssh doesn't do that.
<br>
<p>I then tried to export HWLOC_XMLFILE in ~/.ssh/environment, where I
<br>
added PermitUserEnvironment option to sshd_config, but that didn't work
<br>
either.
<br>
<p>Digging further...
<br>
<p>For the record, this is ubuntu 14.04, using bash as the default shell.
<br>
<p>Thanks,
<br>
Andrej
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1221.php">Samuel Thibault: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Previous message:</strong> <a href="1219.php">Samuel Thibault: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>In reply to:</strong> <a href="1219.php">Samuel Thibault: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1221.php">Samuel Thibault: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Reply:</strong> <a href="1221.php">Samuel Thibault: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
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
