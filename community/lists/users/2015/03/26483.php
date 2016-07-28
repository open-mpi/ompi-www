<?
$subject_val = "Re: [OMPI users] Questions regarding xpmem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 07:03:04 2015" -->
<!-- isoreceived="20150317110304" -->
<!-- sent="Tue, 17 Mar 2015 12:02:43 +0100" -->
<!-- isosent="20150317110243" -->
<!-- name="Tobias Kloeffel" -->
<!-- email="tobias.kloeffel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions regarding xpmem" -->
<!-- id="550809D3.1080305_at_fau.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20150316165652.GK14275_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions regarding xpmem<br>
<strong>From:</strong> Tobias Kloeffel (<em>tobias.kloeffel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-17 07:02:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26484.php">etcamargo: "[OMPI users] monitoring the status of processors"</a>
<li><strong>Previous message:</strong> <a href="26482.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>In reply to:</strong> <a href="26480.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26487.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Reply:</strong> <a href="26487.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Reply:</strong> <a href="26490.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Nathan,
<br>
<p>I am using:
<br>
IMB 4.0 Update 2
<br>
gcc version 4.8.1
<br>
Intel compilers 15.0.1 20141023
<br>
xpmem from your github
<br>
<p>I also tested pwscf (QuatumEespresso), here I can observe the same 
<br>
behavior. The entire calculation runs without problems, but a few mpi 
<br>
procs just stay alive and refuse to die, even with signal 9.
<br>
openmpi and pw was build with the intel compilers, xpmem with gcc.
<br>
<p><p>Kind regards,
<br>
Tobias
<br>
<p>On 03/16/2015 05:56 PM, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; What program are you using for the benchmark? Are you using the xpmem
</span><br>
<span class="quotelev1">&gt; branch in my github? For my testing I used a stock ubuntu 3.13 kernel
</span><br>
<span class="quotelev1">&gt; but I have not full stress-tested my xpmem branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will see if I can reproduce and fix the hang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 16, 2015 at 05:32:26PM +0100, Tobias Kloeffel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; currently I am benchmarking the different single copy mechanisms
</span><br>
<span class="quotelev2">&gt;&gt; knem/cma/xpmem on a Xeon E5 V3 machine.
</span><br>
<span class="quotelev2">&gt;&gt; I am using openmpi 1.8.4 with the CMA patch for vader.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While it turns out that xpmem is the clear winner (reproducing Nathan
</span><br>
<span class="quotelev2">&gt;&gt; Hjelm's results) I always ran into a problem at the mpi finalizing step. At
</span><br>
<span class="quotelev2">&gt;&gt; this step, at least one process hangs, and can't be killed anymore. To get
</span><br>
<span class="quotelev2">&gt;&gt; rid of the hanging process, the server has to be rebooted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The applications finish successfully.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, I can't find any further development of the xpmem module. Is
</span><br>
<span class="quotelev2">&gt;&gt; this bug known to anyone? What kernel versions do you use?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tested kernel versions:
</span><br>
<span class="quotelev2">&gt;&gt; 3.11.25-desktop (openSUSE)
</span><br>
<span class="quotelev2">&gt;&gt; 3.18.9 (vanilla)
</span><br>
<span class="quotelev2">&gt;&gt; 3.19.1 (vanilla)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; M.Sc. Tobias Kl&#246;ffel
</span><br>
<span class="quotelev2">&gt;&gt; =======================================================
</span><br>
<span class="quotelev2">&gt;&gt; Interdisciplinary Center for Molecular Materials (ICMM)
</span><br>
<span class="quotelev2">&gt;&gt; and Computer-Chemistry-Center (CCC)
</span><br>
<span class="quotelev2">&gt;&gt; Department Chemie und Pharmazie
</span><br>
<span class="quotelev2">&gt;&gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg
</span><br>
<span class="quotelev2">&gt;&gt; N&#228;gelsbachstr. 25
</span><br>
<span class="quotelev2">&gt;&gt; D-91052 Erlangen, Germany
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Room: 2.307
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +49 (0) 9131 / 85 - 20421
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +49 (0) 9131 / 85 - 26565
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =======================================================
</span><br>
<span class="quotelev2">&gt;&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev2">&gt;&gt; Institute I: General Materials Properties
</span><br>
<span class="quotelev2">&gt;&gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg
</span><br>
<span class="quotelev2">&gt;&gt; Martensstr. 5, D-91058 Erlangen, Germany
</span><br>
<span class="quotelev2">&gt;&gt; Office 3.40
</span><br>
<span class="quotelev2">&gt;&gt; Phone: (+49) 9131 85 27 -486
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.gmp.ww.uni-erlangen.de">http://www.gmp.ww.uni-erlangen.de</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; E-mail: tobias.kloeffel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26479.php">http://www.open-mpi.org/community/lists/users/2015/03/26479.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26480.php">http://www.open-mpi.org/community/lists/users/2015/03/26480.php</a>
</span><br>
<p><pre>
-- 
M.Sc. Tobias Kl&#246;ffel
=======================================================
Interdisciplinary Center for Molecular Materials (ICMM)
and Computer-Chemistry-Center (CCC)
Department Chemie und Pharmazie
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg
N&#228;gelsbachstr. 25
D-91052 Erlangen, Germany
Room: 2.307
Phone: +49 (0) 9131 / 85 - 20421
Fax: +49 (0) 9131 / 85 - 26565
=======================================================
Department of Materials Science and Engineering
Institute I: General Materials Properties
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg
  
Martensstr. 5, D-91058 Erlangen, Germany
Office 3.40
Phone: (+49) 9131 85 27 -486
<a href="http://www.gmp.ww.uni-erlangen.de">http://www.gmp.ww.uni-erlangen.de</a>
E-mail: tobias.kloeffel_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26483/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26484.php">etcamargo: "[OMPI users] monitoring the status of processors"</a>
<li><strong>Previous message:</strong> <a href="26482.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>In reply to:</strong> <a href="26480.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26487.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Reply:</strong> <a href="26487.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Reply:</strong> <a href="26490.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
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
