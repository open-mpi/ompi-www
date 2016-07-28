<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan  8 15:51:50 2007" -->
<!-- isoreceived="20070108205150" -->
<!-- sent="Mon, 8 Jan 2007 21:52:08 +0100" -->
<!-- isosent="20070108205208" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi failing on mx only" -->
<!-- id="20070108205208.GX6619_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="06FEC5A0-A74B-4DDF-8531-8489187CAEAC_at_cisco.com" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-08 15:52:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2443.php">Tom Lund: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Previous message:</strong> <a href="2441.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2440.php">Jeff Squyres: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2444.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jan 08, 2007 at 03:07:57PM -0500, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; if you're running in an ssh environment, you generally have 2 choices to  
</span><br>
<span class="quotelev1">&gt; attach serial debuggers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Put a loop in your app that pauses until you can attach a  
</span><br>
<span class="quotelev1">&gt; debugger.  Perhaps something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; { int i = 0; printf(&quot;pid %d ready\n&quot;, getpid()); while (0 == i) sleep  
</span><br>
<span class="quotelev1">&gt; (5); }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kludgey and horrible, but it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. mpirun an xterm with gdb. 
</span><br>
<p>If one of the participating hosts is the localhost and it's
<br>
sufficient to debug only one process, it's even possible to
<br>
call gdb directly:
<br>
<p>adi_at_ipc654~$ mpirun -np 2 -host ipc654,dana \
<br>
&nbsp;&nbsp;&nbsp;sh -c 'if [[ $(hostname)  == &quot;ipc654&quot; ]]; then gdb test/vm/ring; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else test/vm/ring ; fi '
<br>
<p><p>(also works great with ddd).
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2443.php">Tom Lund: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Previous message:</strong> <a href="2441.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2440.php">Jeff Squyres: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2444.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
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
