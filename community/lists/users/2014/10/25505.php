<?
$subject_val = "Re: [OMPI users] Open MPI on Cray xc30 and getpwuid";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 09:48:52 2014" -->
<!-- isoreceived="20141016134852" -->
<!-- sent="Thu, 16 Oct 2014 06:48:47 -0700" -->
<!-- isosent="20141016134847" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI on Cray xc30 and getpwuid" -->
<!-- id="41E9A1D5-0F19-4913-A5BF-C65F8C0FA48A_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="FD2571D2-D2B5-427F-82DF-2FF81A615E58_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI on Cray xc30 and getpwuid<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-16 09:48:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25506.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>Previous message:</strong> <a href="25504.php">Aur&#233;lien Bouteiller: "[OMPI users] Open MPI on Cray xc30 and getpwuid"</a>
<li><strong>In reply to:</strong> <a href="25504.php">Aur&#233;lien Bouteiller: "[OMPI users] Open MPI on Cray xc30 and getpwuid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Add --disable-getpwuid to configure
<br>
<p>On Oct 16, 2014, at 12:36 AM, Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am building trunk on the Cray xc30. 
</span><br>
<span class="quotelev1">&gt; I get the following warning during link (static link) 
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.a(session_dir.o): In function `orte_session_dir_get_name':
</span><br>
<span class="quotelev1">&gt; session_dir.c:(.text+0x226): warning: Using 'getpwuid' in statically linked applications requires at runtime the shared libraries from the glibc version used for linking
</span><br>
<span class="quotelev1">&gt; /nics/c/home/bouteill/DARTER/ompi-fast/opal/.libs/libopen-pal.a(if.o): In function `opal_ifaddrtoname':
</span><br>
<span class="quotelev1">&gt; if.c:(.text+0x222): warning: Using 'getaddrinfo' in statically linked applications requires at runtime the shared libraries from the glibc version used for linking
</span><br>
<span class="quotelev1">&gt; /nics/c/home/bouteill/DARTER/ompi-fast/opal/.libs/libopen-pal.a(evutil.o): In function `opal_libevent2021_evutil_getaddrinfo_common':
</span><br>
<span class="quotelev1">&gt; evutil.c:(.text+0x19fb): warning: Using 'getprotobynumber' in statically linked applications requires at runtime the shared libraries from the glibc version used for linking
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, the resulting code does crash in getpwuid. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know Nathan has successfully compiled for cray machines. What&#146;s the trick ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aurelien 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;          ~~~ Aur&#233;lien Bouteiller, Ph.D. ~~~
</span><br>
<span class="quotelev1">&gt;             ~ Research Scientist @ ICL ~
</span><br>
<span class="quotelev1">&gt; The University of Tennessee, Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; 1122 Volunteer Blvd, suite 309, Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; tel: +1 (865) 974-9375       fax: +1 (865) 974-8296
</span><br>
<span class="quotelev1">&gt; <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25504.php">http://www.open-mpi.org/community/lists/users/2014/10/25504.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25506.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] Hybrid OpenMPI/OpenMP leading to deadlocks?"</a>
<li><strong>Previous message:</strong> <a href="25504.php">Aur&#233;lien Bouteiller: "[OMPI users] Open MPI on Cray xc30 and getpwuid"</a>
<li><strong>In reply to:</strong> <a href="25504.php">Aur&#233;lien Bouteiller: "[OMPI users] Open MPI on Cray xc30 and getpwuid"</a>
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
