<?
$subject_val = "Re: [OMPI users] error with Vprotocol pessimist";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 15:03:05 2007" -->
<!-- isoreceived="20071211200305" -->
<!-- sent="Tue, 11 Dec 2007 15:02:58 -0500" -->
<!-- isosent="20071211200258" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error with Vprotocol pessimist" -->
<!-- id="00A9AC0D-3233-4301-B108-E55091201D5B_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D302365C-E40D-4A32-A564-2F6E171AD3DF_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] error with Vprotocol pessimist<br>
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 15:02:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4643.php">Tim Mattox: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>Previous message:</strong> <a href="4641.php">Moreland, Kenneth: "[OMPI users] Problems with GATHERV on one process"</a>
<li><strong>In reply to:</strong> <a href="4640.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4645.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Reply:</strong> <a href="4645.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I cannot reproduce the error. Please make sure you have the lib/ 
<br>
openmpi/mca_pml_v.so file in your build. If you don't, maybe you  
<br>
forgot to run autogen.sh at the root of the trunk when you  
<br>
removed .ompi_ignore.
<br>
<p>If this does not fix the problem, please let me know your command line  
<br>
options to mpirun.
<br>
<p>Aurelien
<br>
<p>Le 11 d&#233;c. 07 &#224; 14:36, Aurelien Bouteiller a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Mmm, I'll investigate this today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; Le 11 d&#233;c. 07 &#224; 08:46, Thomas Ropars a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried to test the message logging component vprotocol pessimist.
</span><br>
<span class="quotelev2">&gt;&gt; (svn checkout revision 16926)
</span><br>
<span class="quotelev2">&gt;&gt; When I run an mpi application, I get the following error :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: component_find: unable to open vprotocol pessimist:
</span><br>
<span class="quotelev2">&gt;&gt; /local/openmpi/lib/openmpi/mca_vprotocol_pessimist.so: undefined
</span><br>
<span class="quotelev2">&gt;&gt; symbol:
</span><br>
<span class="quotelev2">&gt;&gt; pml_v_output (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thomas
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr. Aurelien Bouteiller, Sr. Research Associate
</span><br>
<span class="quotelev1">&gt; Innovative Computing Laboratory - MPI group
</span><br>
<span class="quotelev1">&gt; +1 865 974 6321
</span><br>
<span class="quotelev1">&gt; 1122 Volunteer Boulevard
</span><br>
<span class="quotelev1">&gt; Claxton Education Building Suite 350
</span><br>
<span class="quotelev1">&gt; Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4643.php">Tim Mattox: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>Previous message:</strong> <a href="4641.php">Moreland, Kenneth: "[OMPI users] Problems with GATHERV on one process"</a>
<li><strong>In reply to:</strong> <a href="4640.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4645.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Reply:</strong> <a href="4645.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
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
