<?
$subject_val = "Re: [OMPI users] Questions regarding xpmem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 11:37:21 2015" -->
<!-- isoreceived="20150317153721" -->
<!-- sent="Tue, 17 Mar 2015 09:37:20 -0600" -->
<!-- isosent="20150317153720" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions regarding xpmem" -->
<!-- id="20150317153720.GL14275_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="550809D3.1080305_at_fau.de" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-17 11:37:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26488.php">Ahmed Salama: "[OMPI users] openmpi 1.8 error"</a>
<li><strong>Previous message:</strong> <a href="26486.php">Damien: "Re: [OMPI users] monitoring the status of processors"</a>
<li><strong>In reply to:</strong> <a href="26483.php">Tobias Kloeffel: "Re: [OMPI users] Questions regarding xpmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26490.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was able to reproduce the issue on ubuntu with a 3.13 kernel. I think
<br>
I know what is going wrong and I am working on a fix.
<br>
<p>-Nathan
<br>
<p>On Tue, Mar 17, 2015 at 12:02:43PM +0100, Tobias Kloeffel wrote:
<br>
<span class="quotelev1">&gt;    Hello Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I am using:
</span><br>
<span class="quotelev1">&gt;    IMB 4.0 Update 2
</span><br>
<span class="quotelev1">&gt;    gcc version 4.8.1
</span><br>
<span class="quotelev1">&gt;    Intel compilers 15.0.1 20141023
</span><br>
<span class="quotelev1">&gt;    xpmem from your github
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I also tested pwscf (QuatumEespresso), here I can observe the same
</span><br>
<span class="quotelev1">&gt;    behavior. The entire calculation runs without problems, but a few mpi
</span><br>
<span class="quotelev1">&gt;    procs just stay alive and refuse to die, even with signal 9.
</span><br>
<span class="quotelev1">&gt;    openmpi and pw was build with the intel compilers, xpmem with gcc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Kind regards,
</span><br>
<span class="quotelev1">&gt;    Tobias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On 03/16/2015 05:56 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  What program are you using for the benchmark? Are you using the xpmem
</span><br>
<span class="quotelev1">&gt;  branch in my github? For my testing I used a stock ubuntu 3.13 kernel
</span><br>
<span class="quotelev1">&gt;  but I have not full stress-tested my xpmem branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I will see if I can reproduce and fix the hang.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  On Mon, Mar 16, 2015 at 05:32:26PM +0100, Tobias Kloeffel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Hello everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  currently I am benchmarking the different single copy mechanisms
</span><br>
<span class="quotelev1">&gt;  knem/cma/xpmem on a Xeon E5 V3 machine.
</span><br>
<span class="quotelev1">&gt;  I am using openmpi 1.8.4 with the CMA patch for vader.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  While it turns out that xpmem is the clear winner (reproducing Nathan
</span><br>
<span class="quotelev1">&gt;  Hjelm's results) I always ran into a problem at the mpi finalizing step. At
</span><br>
<span class="quotelev1">&gt;  this step, at least one process hangs, and can't be killed anymore. To get
</span><br>
<span class="quotelev1">&gt;  rid of the hanging process, the server has to be rebooted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  The applications finish successfully.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Unfortunately, I can't find any further development of the xpmem module. Is
</span><br>
<span class="quotelev1">&gt;  this bug known to anyone? What kernel versions do you use?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Tested kernel versions:
</span><br>
<span class="quotelev1">&gt;  3.11.25-desktop (openSUSE)
</span><br>
<span class="quotelev1">&gt;  3.18.9 (vanilla)
</span><br>
<span class="quotelev1">&gt;  3.19.1 (vanilla)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  M.Sc. Tobias Klo:ffel
</span><br>
<span class="quotelev1">&gt;  =======================================================
</span><br>
<span class="quotelev1">&gt;  Interdisciplinary Center for Molecular Materials (ICMM)
</span><br>
<span class="quotelev1">&gt;  and Computer-Chemistry-Center (CCC)
</span><br>
<span class="quotelev1">&gt;  Department Chemie und Pharmazie
</span><br>
<span class="quotelev1">&gt;  Friedrich-Alexander-Universita:t Erlangen-Nu:rnberg
</span><br>
<span class="quotelev1">&gt;  Na:gelsbachstr. 25
</span><br>
<span class="quotelev1">&gt;  D-91052 Erlangen, Germany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Room: 2.307
</span><br>
<span class="quotelev1">&gt;  Phone: +49 (0) 9131 / 85 - 20421
</span><br>
<span class="quotelev1">&gt;  Fax: +49 (0) 9131 / 85 - 26565
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  =======================================================
</span><br>
<span class="quotelev1">&gt;  Department of Materials Science and Engineering
</span><br>
<span class="quotelev1">&gt;  Institute I: General Materials Properties
</span><br>
<span class="quotelev1">&gt;  Friedrich-Alexander-Universita:t Erlangen-Nu:rnberg
</span><br>
<span class="quotelev1">&gt;  Martensstr. 5, D-91058 Erlangen, Germany
</span><br>
<span class="quotelev1">&gt;  Office 3.40
</span><br>
<span class="quotelev1">&gt;  Phone: (+49) 9131 85 27 -486
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.gmp.ww.uni-erlangen.de">http://www.gmp.ww.uni-erlangen.de</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  E-mail: tobias.kloeffel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26479.php">http://www.open-mpi.org/community/lists/users/2015/03/26479.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26480.php">http://www.open-mpi.org/community/lists/users/2015/03/26480.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  M.Sc. Tobias Klo:ffel
</span><br>
<span class="quotelev1">&gt;  =======================================================
</span><br>
<span class="quotelev1">&gt;  Interdisciplinary Center for Molecular Materials (ICMM)
</span><br>
<span class="quotelev1">&gt;  and Computer-Chemistry-Center (CCC)
</span><br>
<span class="quotelev1">&gt;  Department Chemie und Pharmazie
</span><br>
<span class="quotelev1">&gt;  Friedrich-Alexander-Universita:t Erlangen-Nu:rnberg
</span><br>
<span class="quotelev1">&gt;  Na:gelsbachstr. 25
</span><br>
<span class="quotelev1">&gt;  D-91052 Erlangen, Germany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Room: 2.307
</span><br>
<span class="quotelev1">&gt;  Phone: +49 (0) 9131 / 85 - 20421
</span><br>
<span class="quotelev1">&gt;  Fax: +49 (0) 9131 / 85 - 26565
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  =======================================================
</span><br>
<span class="quotelev1">&gt;  Department of Materials Science and Engineering
</span><br>
<span class="quotelev1">&gt;  Institute I: General Materials Properties
</span><br>
<span class="quotelev1">&gt;  Friedrich-Alexander-Universita:t Erlangen-Nu:rnberg
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  Martensstr. 5, D-91058 Erlangen, Germany
</span><br>
<span class="quotelev1">&gt;  Office 3.40
</span><br>
<span class="quotelev1">&gt;  Phone: (+49) 9131 85 27 -486
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.gmp.ww.uni-erlangen.de">http://www.gmp.ww.uni-erlangen.de</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  E-mail: tobias.kloeffel_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26483.php">http://www.open-mpi.org/community/lists/users/2015/03/26483.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26487/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26488.php">Ahmed Salama: "[OMPI users] openmpi 1.8 error"</a>
<li><strong>Previous message:</strong> <a href="26486.php">Damien: "Re: [OMPI users] monitoring the status of processors"</a>
<li><strong>In reply to:</strong> <a href="26483.php">Tobias Kloeffel: "Re: [OMPI users] Questions regarding xpmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26490.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
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
