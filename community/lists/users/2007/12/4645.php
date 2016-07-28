<?
$subject_val = "Re: [OMPI users] error with Vprotocol pessimist";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 02:37:23 2007" -->
<!-- isoreceived="20071212073723" -->
<!-- sent="Wed, 12 Dec 2007 02:37:14 -0500" -->
<!-- isosent="20071212073714" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error with Vprotocol pessimist" -->
<!-- id="73374187-1AF4-4D57-A75C-F13743A6F69C_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="00A9AC0D-3233-4301-B108-E55091201D5B_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2007-12-12 02:37:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4646.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4644.php">Warner Yuen: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard"</a>
<li><strong>In reply to:</strong> <a href="4642.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4661.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Reply:</strong> <a href="4661.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I could reproduce and fix the bug. It will be corrected in trunk as  
<br>
soon as the svn is online again. Thanks for reporting the problem.
<br>
<p>Aurelien
<br>
<p>Le 11 d&#233;c. 07 &#224; 15:02, Aurelien Bouteiller a &#233;crit :
<br>
<p><span class="quotelev1">&gt; I cannot reproduce the error. Please make sure you have the lib/
</span><br>
<span class="quotelev1">&gt; openmpi/mca_pml_v.so file in your build. If you don't, maybe you
</span><br>
<span class="quotelev1">&gt; forgot to run autogen.sh at the root of the trunk when you
</span><br>
<span class="quotelev1">&gt; removed .ompi_ignore.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this does not fix the problem, please let me know your command line
</span><br>
<span class="quotelev1">&gt; options to mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 11 d&#233;c. 07 &#224; 14:36, Aurelien Bouteiller a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mmm, I'll investigate this today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt; Le 11 d&#233;c. 07 &#224; 08:46, Thomas Ropars a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've tried to test the message logging component vprotocol  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pessimist.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (svn checkout revision 16926)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I run an mpi application, I get the following error :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca: base: component_find: unable to open vprotocol pessimist:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /local/openmpi/lib/openmpi/mca_vprotocol_pessimist.so: undefined
</span><br>
<span class="quotelev3">&gt;&gt;&gt; symbol:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pml_v_output (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thomas
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Aurelien Bouteiller, Sr. Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Innovative Computing Laboratory - MPI group
</span><br>
<span class="quotelev2">&gt;&gt; +1 865 974 6321
</span><br>
<span class="quotelev2">&gt;&gt; 1122 Volunteer Boulevard
</span><br>
<span class="quotelev2">&gt;&gt; Claxton Education Building Suite 350
</span><br>
<span class="quotelev2">&gt;&gt; Knoxville, TN 37996
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="4646.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4644.php">Warner Yuen: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard"</a>
<li><strong>In reply to:</strong> <a href="4642.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4661.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Reply:</strong> <a href="4661.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
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
