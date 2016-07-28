<?
$subject_val = "Re: [OMPI users] Oversubscribing a subset of a machine's cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 04:15:52 2008" -->
<!-- isoreceived="20080211091552" -->
<!-- sent="Mon, 11 Feb 2008 10:15:39 +0100" -->
<!-- isosent="20080211091539" -->
<!-- name="Torje Henriksen" -->
<!-- email="torjeh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscribing a subset of a machine's cores" -->
<!-- id="9A80F78B-0266-41BA-AFC5-50D45289A1A5_at_stud.cs.uit.no" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47AB0BE9.4000401_at_scalableinformatics.com" -->
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
<strong>From:</strong> Torje Henriksen (<em>torjeh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-11 04:15:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5017.php">Stefan Knecht: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>Previous message:</strong> <a href="5015.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with	extern	&quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="5002.php">Joe Landman: "Re: [OMPI users] Oversubscribing a subset of a machine's cores"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks for the heads up Joseph, you sent me in the right direction.  
<br>
Very helpful indeed, although the command that seems to be doing the  
<br>
trick on my system is
<br>
<p>$taskset -c X ...
<br>
<p><p>Best regards,
<br>
<p>Torje Henriksen
<br>
<p>On Feb 7, 2008, at 2:47 PM, Joe Landman wrote:
<br>
<p><span class="quotelev1">&gt; Torje Henriksen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Still, all eight cores are being used. I can see why you would want  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; use all cores, and I can see that oversubscribing a sub-set of the
</span><br>
<span class="quotelev2">&gt;&gt; cores might seem silly.  My question is, is it possible to do what I
</span><br>
<span class="quotelev2">&gt;&gt; want to do without hacking the open mpi code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you get numactl to help you do what you want?  That is, for the
</span><br>
<span class="quotelev1">&gt; code, somehow tweak the launcher to run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	numactl --physcpubind=X ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or similar?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joseph Landman, Ph.D
</span><br>
<span class="quotelev1">&gt; Founder and CEO
</span><br>
<span class="quotelev1">&gt; Scalable Informatics LLC,
</span><br>
<span class="quotelev1">&gt; email: landman_at_[hidden]
</span><br>
<span class="quotelev1">&gt; web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
</span><br>
<span class="quotelev1">&gt;        <a href="http://jackrabbit.scalableinformatics.com">http://jackrabbit.scalableinformatics.com</a>
</span><br>
<span class="quotelev1">&gt; phone: +1 734 786 8423
</span><br>
<span class="quotelev1">&gt; fax  : +1 866 888 3112
</span><br>
<span class="quotelev1">&gt; cell : +1 734 612 4615
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
<li><strong>Next message:</strong> <a href="5017.php">Stefan Knecht: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>Previous message:</strong> <a href="5015.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with	extern	&quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="5002.php">Joe Landman: "Re: [OMPI users] Oversubscribing a subset of a machine's cores"</a>
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
