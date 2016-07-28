<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug  8 16:01:40 2007" -->
<!-- isoreceived="20070808200140" -->
<!-- sent="Wed, 08 Aug 2007 14:01:01 -0600" -->
<!-- isosent="20070808200101" -->
<!-- name="Marcus R. Epperson" -->
<!-- email="mrepper_at_[hidden]" -->
<!-- subject="[OMPI users] orterun mangling executable's &amp;quot;-host&amp;quot; argument" -->
<!-- id="46BA20FD.1030508_at_sandia.gov" -->
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
<strong>From:</strong> Marcus R. Epperson (<em>mrepper_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-08 16:01:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3835.php">Guillaume THOMAS-COLLIGNON: "[OMPI users] Help : Need some tuning, or is it a bug ?"</a>
<li><strong>Previous message:</strong> <a href="3833.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3839.php">Tim Prins: "Re: [OMPI users] orterun mangling executable's &quot;-host&quot; argument"</a>
<li><strong>Reply:</strong> <a href="3839.php">Tim Prins: "Re: [OMPI users] orterun mangling executable's &quot;-host&quot; argument"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a code that takes &quot;-host &lt;host&gt;&quot; as command-line arguments, and when run via orterun they are getting replaced with &quot;-rawmap 1 &lt;host&gt;&quot;.  I would have expected orterun to stop parsing its own options after seeing the executable name.
<br>
<p>Here's a simple reproducer:
<br>
<p>$ cat myprogram.sh
<br>
#!/bin/bash
<br>
echo &quot;$@&quot;
<br>
<p>$ ./myprogram.sh a b -host c
<br>
a b -host c
<br>
<p>$ orterun -n 1 ./myprogram.sh a b -host c
<br>
a b -rawmap 1 c
<br>
<p>This seems like a bug to me, but maybe there is some other simple invocation that would make it work as expected.  I tried adding a &quot;--&quot; argument before the executable name in hopes that it would stop argument processing at that point (similar to bash), but it had no effect.
<br>
<p>Thanks for any help,
<br>
-Marcus
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3835.php">Guillaume THOMAS-COLLIGNON: "[OMPI users] Help : Need some tuning, or is it a bug ?"</a>
<li><strong>Previous message:</strong> <a href="3833.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3839.php">Tim Prins: "Re: [OMPI users] orterun mangling executable's &quot;-host&quot; argument"</a>
<li><strong>Reply:</strong> <a href="3839.php">Tim Prins: "Re: [OMPI users] orterun mangling executable's &quot;-host&quot; argument"</a>
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
