<?
$subject_val = "Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 18 04:58:53 2014" -->
<!-- isoreceived="20140718085853" -->
<!-- sent="Fri, 18 Jul 2014 08:58:50 +0000" -->
<!-- isosent="20140718085850" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature" -->
<!-- id="8337B490252F0944BF1D38541059627E1734864B_at_DLREXMBX01.intra.dlr.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] latest stable and win7/msvc2013 and shared memory feature" -->
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
<strong>Subject:</strong> Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature<br>
<strong>From:</strong> <a href="mailto:Michael.Rachner_at_[hidden]?Subject=Re:%20[OMPI%20users]%20latest%20stable%20and%20win7/msvc2013%20and%20shared%20memory%20feature"><em>Michael.Rachner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-07-18 04:58:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24812.php">Dirk Schubert: "[OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>Previous message:</strong> <a href="24810.php">Damien: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24813.php">Fab Tillier: "Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature"</a>
<li><strong>Reply:</strong> <a href="24813.php">Fab Tillier: "Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Mr. Tillier  and  other MPI-developers,
<br>
<p>I am glad to hear that MS-MPI development is still active   and interested in User feature requests.
<br>
<p>You want User feature requests for your further MS-MPI development?
<br>
Here is my request (I am doing Fortran CFD-code development for decades now under WINDOWS and LINUX): 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--Extend MS-MPI to support MPI-3  in Fortran95-codes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Therein: The most important feature for me (and I think for many other users  too, but they possibly don't even know that there exist such a fine feature in MPI-3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is the MPI-3 shared memory feature.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It  requires these 3 MPI-routines:  sbr  MPI_WIN_SHARED_ALLOC,  MPI_WIN_SHARED_QUERY,  MPI_WIN_FREE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;along with the Ftn2003 routine  C_F_POINTER   and the Ftn2003 intrinsic module   ISO_C_BINDING    (both already contained in INTEL-Ftn95-compiler).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This shared memory feature allows using the same Fortran array (reading and writing access) on MPI-processes running on the same node.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A breakthrough in the Fortran world, enabled by MPI-3  . The savings in storage and the reduction of the amount of MPI-data transfer can be huge!
<br>
<p>My knowledge on the state of the art of realizing that feature by MPI-developers:
<br>
&nbsp;&nbsp;&nbsp;- That MPI-3 shared memory feature works fine with MPICH-3.0.4 .
<br>
&nbsp;&nbsp;&nbsp;- It does not yet work with OPENMPI-1.8.1 (but shall be working in 1.8.2) .
<br>
&nbsp;&nbsp;&nbsp;- It still has a bug in MVAPICH2 2.0rc2  (at begin of June 2014 they answered me to look at the problem) .
<br>
&nbsp;&nbsp;&nbsp;- It is not supported by INTEL-MPI 4.1.1  (only MPI-2 so far).
<br>
&nbsp;&nbsp;&nbsp;- It is not supported by MS-MPI 4.2.4400.0  (only MPI-2 so far).
<br>
<p>Maybe this encourages you and your MPI-teams to provide that feature soon.
<br>
<p>Greetings to you all!
<br>
&nbsp;&nbsp;Michael Rachner
<br>
&nbsp;
<br>
<p><p>-----Urspr&#252;ngliche Nachricht-----
<br>
Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Fab Tillier
<br>
Gesendet: Freitag, 18. Juli 2014 00:30
<br>
An: Jed Brown; Damien; users_at_[hidden]
<br>
Cc: MPI External Communications
<br>
Betreff: Re: [OMPI users] latest stable and win7/msvc2013
<br>
<p>[resending now that I've joined the Open MPI users list, sorry for the duplicate]
<br>
<p>Hi Jed,
<br>
<p>Thanks for looping me on this mail thread. 
<br>
<p>Jed Brown wrote on Thu, 17 Jul 2014 at 11:19:42
<br>
<p><span class="quotelev1">&gt; Damien &lt;damien_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is this something that could be funded by Microsoft, and is it time 
</span><br>
<span class="quotelev2">&gt;&gt; to approach them perhaps?  MS MPI is based on MPICH, and if mainline 
</span><br>
<span class="quotelev2">&gt;&gt; MPICH isn't supporting Windows anymore, then there won't be a whole 
</span><br>
<span class="quotelev2">&gt;&gt; lot of development in an increasingly older Windows build. With the 
</span><br>
<span class="quotelev2">&gt;&gt; Open-MPI roadmap, there's a lot happening.
</span><br>
<p>Open-MPI isn't supporting Windows anymore either, and I would think it fair to say that a lot is happening in both Open-MPI and MPICH (for non-Windows environments).
<br>
<p><span class="quotelev2">&gt;&gt; Would it be a
</span><br>
<span class="quotelev2">&gt;&gt; better business model for MS to piggy-back off of Open-MPI ongoing 
</span><br>
<span class="quotelev2">&gt;&gt; innovation, and put their resources into maintaining a Windows build 
</span><br>
<span class="quotelev2">&gt;&gt; of Open-MPI instead?
</span><br>
<p>Microsoft doesn't simply maintain a Windows build of MPICH.  While MS-MPI is derived from MPICH, at this point it is really a more of a fork given how much Windows-specific work we've done that isn't applicable to the mainline MPICH development.  We're continuing to invest in the development of MS-MPI, and our focus continues to be on user-requested features.  We strongly believe that users care more about feature content than which codebase we are derived from - after all, portability is one of the main goals of the MPI standard.
<br>
<p>We've worked very hard to maintain ABI over the various versions of MS-MPI, and a fundamental shift to a different implementation would wreak havoc on users and our ISV partners.
<br>
<p><span class="quotelev1">&gt; Maybe Fab can comment on Microsoft's intentions regarding MPI and
</span><br>
<span class="quotelev1">&gt; C99/C11 (just dreaming now).
</span><br>
<p>I can't really comment on the C99/C11 stuff, as that's a completely different organization within Microsoft.  Rob seems to have shed some light on this (thanks for finding that Rob!)
<br>
<p><span class="quotelev1">&gt;From an MPI perspective, we've been investing in making ourselves available to our user and developer community, whether through email (mailto:askmpi_at_[hidden], CC'd), through our beta program on Microsoft Connect (<a href="https://connect.microsoft.com/HPC/MS-MPI">https://connect.microsoft.com/HPC/MS-MPI</a>), where users can request (and vote for) features (<a href="https://connect.microsoft.com/HPC/Feedback">https://connect.microsoft.com/HPC/Feedback</a>), or through our web forums (<a href="http://social.microsoft.com/Forums/en-US/home?forum=windowshpcmpi">http://social.microsoft.com/Forums/en-US/home?forum=windowshpcmpi</a>).  We'd very much like to get input from our user community to help shape our features content going forward.
</span><br>
<p>I'm not familiar with PETSc, but would be happy to develop a closer relationship with the developers to enable better integration of MS-MPI into the PETSc environment.  Conceptually, a --download-msmpi option would be great, and we already allow redistribution of our installer package with third party applications (to enable bundling) if that makes more sense.
<br>
<p>-Fab
<br>
<p><span class="quotelev2">&gt;&gt; On 2014-07-17 11:42 AM, Jed Brown wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rob Latham &lt;robl_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well, I (and dgoodell and jsquyers and probably a few others of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you) can say from observing discuss_at_[hidden] traffic that we get 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one message about Windows support every month -- probably more often.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seems to average at least once a week.  We also see regular petsc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support emails wondering why --download-{mpich,openmpi} does not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work on Windows.  (These options are pretty much only used by 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; beginners for whom PETSc is their first encounter with MPI.)
</span><br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24809.php">http://www.open-mpi.org/community/lists/users/2014/07/24809.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24812.php">Dirk Schubert: "[OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>Previous message:</strong> <a href="24810.php">Damien: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24813.php">Fab Tillier: "Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature"</a>
<li><strong>Reply:</strong> <a href="24813.php">Fab Tillier: "Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature"</a>
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
