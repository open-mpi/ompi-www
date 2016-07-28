<?
$subject_val = "Re: [OMPI users] Debugging OpenMPI with GDB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 25 14:25:13 2010" -->
<!-- isoreceived="20100625182513" -->
<!-- sent="Fri, 25 Jun 2010 19:25:05 +0100" -->
<!-- isosent="20100625182505" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging OpenMPI with GDB" -->
<!-- id="9B23E4B8-A34E-48CF-A918-EB6E7E30E7B3_at_pittman.co.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="201006252018.21804.nemanja.ilic.81_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging OpenMPI with GDB<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-25 14:25:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13413.php">Prentice Bisbal: "Re: [OMPI users] Debugging OpenMPI with GDB"</a>
<li><strong>Previous message:</strong> <a href="13411.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "[OMPI users] Debugging OpenMPI with GDB"</a>
<li><strong>In reply to:</strong> <a href="13411.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "[OMPI users] Debugging OpenMPI with GDB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13413.php">Prentice Bisbal: "Re: [OMPI users] Debugging OpenMPI with GDB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 25 Jun 2010, at 19:18, &#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic) wrote:
<br>
<p><span class="quotelev1">&gt; Dear Sir or Madam,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am about to start a project that includes MPI communication. My question is: &quot;Is there a way to debug parallel OpenMPI applications on linux in console mode on one computer using gdb?&quot;
</span><br>
<p>You can debug individual processes in a job with gdb directly.  Alternatively if you want to see the global picture of what a job is doing at a point in time follow the link in my sig, it won't allow deep debugging with breakpoints and register dumps but it should allow you to narrow in on problems quickly.
<br>
<p>Also which is unique to MPI it's possible to see the &quot;message queues&quot; for ranks within an MPI application which can help with programming.
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13413.php">Prentice Bisbal: "Re: [OMPI users] Debugging OpenMPI with GDB"</a>
<li><strong>Previous message:</strong> <a href="13411.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "[OMPI users] Debugging OpenMPI with GDB"</a>
<li><strong>In reply to:</strong> <a href="13411.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "[OMPI users] Debugging OpenMPI with GDB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13413.php">Prentice Bisbal: "Re: [OMPI users] Debugging OpenMPI with GDB"</a>
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
