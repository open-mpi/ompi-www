<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 10 16:06:02 2007" -->
<!-- isoreceived="20070810200602" -->
<!-- sent="Fri, 10 Aug 2007 16:05:45 -0400" -->
<!-- isosent="20070810200545" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orterun mangling executable's &amp;quot;-host&amp;quot; argument" -->
<!-- id="200708101605.45888.tprins_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="46BA20FD.1030508_at_sandia.gov" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-10 16:05:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3840.php">George Bosilca: "Re: [OMPI users] multiple threads synchronization with Openmpi"</a>
<li><strong>Previous message:</strong> <a href="3838.php">Yuan,  Huapeng: "[OMPI users] multiple threads synchronization with Openmpi"</a>
<li><strong>In reply to:</strong> <a href="3834.php">Marcus R. Epperson: "[OMPI users] orterun mangling executable's &quot;-host&quot; argument"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Marcus,
<br>
<p>Your expectation sounds very reasonable to me. I have filed a bug in our bug 
<br>
tracker (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1124">https://svn.open-mpi.org/trac/ompi/ticket/1124</a>), and you will 
<br>
receive emails as it is updated.
<br>
<p>Unfortunately, this is in a part of the code which has not been touched for a 
<br>
long time, and is in somewhat of disrepair. So it might take a while to fix 
<br>
it.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>On Wednesday 08 August 2007 04:01:01 pm Marcus R. Epperson wrote:
<br>
<span class="quotelev1">&gt; We have a code that takes &quot;-host &lt;host&gt;&quot; as command-line arguments, and
</span><br>
<span class="quotelev1">&gt; when run via orterun they are getting replaced with &quot;-rawmap 1 &lt;host&gt;&quot;.  I
</span><br>
<span class="quotelev1">&gt; would have expected orterun to stop parsing its own options after seeing
</span><br>
<span class="quotelev1">&gt; the executable name.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a simple reproducer:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat myprogram.sh
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; echo &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./myprogram.sh a b -host c
</span><br>
<span class="quotelev1">&gt; a b -host c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ orterun -n 1 ./myprogram.sh a b -host c
</span><br>
<span class="quotelev1">&gt; a b -rawmap 1 c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems like a bug to me, but maybe there is some other simple
</span><br>
<span class="quotelev1">&gt; invocation that would make it work as expected.  I tried adding a &quot;--&quot;
</span><br>
<span class="quotelev1">&gt; argument before the executable name in hopes that it would stop argument
</span><br>
<span class="quotelev1">&gt; processing at that point (similar to bash), but it had no effect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt; -Marcus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3840.php">George Bosilca: "Re: [OMPI users] multiple threads synchronization with Openmpi"</a>
<li><strong>Previous message:</strong> <a href="3838.php">Yuan,  Huapeng: "[OMPI users] multiple threads synchronization with Openmpi"</a>
<li><strong>In reply to:</strong> <a href="3834.php">Marcus R. Epperson: "[OMPI users] orterun mangling executable's &quot;-host&quot; argument"</a>
<!-- nextthread="start" -->
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
