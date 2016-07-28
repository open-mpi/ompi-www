<?
$subject_val = "Re: [OMPI users] Oversubscribing a subset of a machine's cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 08:47:20 2008" -->
<!-- isoreceived="20080207134720" -->
<!-- sent="Thu, 07 Feb 2008 08:47:21 -0500" -->
<!-- isosent="20080207134721" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscribing a subset of a machine's cores" -->
<!-- id="47AB0BE9.4000401_at_scalableinformatics.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F9EA8143-C111-4344-893E-2F28EB7EFA48_at_stud.cs.uit.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] Oversubscribing a subset of a machine's cores<br>
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 08:47:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5003.php">jody: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>Previous message:</strong> <a href="5001.php">Dani&#235;l Mantione: "Re: [OMPI users] Infinipath context limit"</a>
<li><strong>In reply to:</strong> <a href="4998.php">Torje Henriksen: "[OMPI users] Oversubscribing a subset of a machine's cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5016.php">Torje Henriksen: "Re: [OMPI users] Oversubscribing a subset of a machine's cores"</a>
<li><strong>Reply:</strong> <a href="5016.php">Torje Henriksen: "Re: [OMPI users] Oversubscribing a subset of a machine's cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Torje Henriksen wrote:
<br>
<p>[...]
<br>
<p><span class="quotelev1">&gt; Still, all eight cores are being used. I can see why you would want to  
</span><br>
<span class="quotelev1">&gt; use all cores, and I can see that oversubscribing a sub-set of the  
</span><br>
<span class="quotelev1">&gt; cores might seem silly.  My question is, is it possible to do what I  
</span><br>
<span class="quotelev1">&gt; want to do without hacking the open mpi code?
</span><br>
<p>Could you get numactl to help you do what you want?  That is, for the 
<br>
code, somehow tweak the launcher to run
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numactl --physcpubind=X ...
<br>
<p>or similar?
<br>
<p><p><p><pre>
-- 
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics LLC,
email: landman_at_[hidden]
web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
        <a href="http://jackrabbit.scalableinformatics.com">http://jackrabbit.scalableinformatics.com</a>
phone: +1 734 786 8423
fax  : +1 866 888 3112
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5003.php">jody: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>Previous message:</strong> <a href="5001.php">Dani&#235;l Mantione: "Re: [OMPI users] Infinipath context limit"</a>
<li><strong>In reply to:</strong> <a href="4998.php">Torje Henriksen: "[OMPI users] Oversubscribing a subset of a machine's cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5016.php">Torje Henriksen: "Re: [OMPI users] Oversubscribing a subset of a machine's cores"</a>
<li><strong>Reply:</strong> <a href="5016.php">Torje Henriksen: "Re: [OMPI users] Oversubscribing a subset of a machine's cores"</a>
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
