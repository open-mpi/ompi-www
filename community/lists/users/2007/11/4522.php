<?
$subject_val = "Re: [OMPI users] warning:regcache incompatible with malloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 27 10:36:52 2007" -->
<!-- isoreceived="20071127153652" -->
<!-- sent="Tue, 27 Nov 2007 10:36:55 -0500" -->
<!-- isosent="20071127153655" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] warning:regcache incompatible with malloc" -->
<!-- id="474C3997.9040103_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D2D7D9FE2492524A925313E2D82E1B5307141C60_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] warning:regcache incompatible with malloc<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-27 10:36:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4523.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4521.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4519.php">de Almeida, Valmor F.: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4531.php">de Almeida, Valmor F.: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Reply:</strong> <a href="4531.php">de Almeida, Valmor F.: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Valmor,
<br>
<p>I prefer to just set the environment variable in my .bashrc so I never 
<br>
have to think about it again. Also it might be slightly better since 
<br>
Open MPI tries to be network neutral, and linking the application 
<br>
against the Myrinet libraries violates that principle. But if you are 
<br>
only ever going to use the particular compilation with Myrinet anyways, 
<br>
I suppose it does not matter.
<br>
<p>I guess this is a long way of saying that it is just personal preference.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p><p>de Almeida, Valmor F. wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am getting the warnings after an upgrade to 
</span><br>
<span class="quotelev1">&gt; mx-1.2.4 and openmpi-1.2.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Either using the env variable setting MX_RCACHE=2, or linking the
</span><br>
<span class="quotelev1">&gt; application with -lmyriexpress removes the warnings. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is either one of them the preferred way of doing it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Valmor
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Scott Atchley
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, July 10, 2007 3:31 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] warning:regcache incompatible with malloc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 10, 2007, at 3:24 PM, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tuesday 10 July 2007 03:11:45 pm Scott Atchley wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 10, 2007, at 2:58 PM, Scott Atchley wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tim, starting with the recently released 1.2.1, it is the default.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To clarify, MX_RCACHE=1 is the default.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It would be good for the default to be something where there is no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printed (i.e. 0 or 2). I see the warning on the current trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt; After further discussion in-house, the warning can be avoided if -
</span><br>
<span class="quotelev2">&gt;&gt; lmyriexpress is included when linking the app (i.e. if it is in mpicc
</span><br>
<span class="quotelev2">&gt;&gt; when linking).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another clarification, the regache does work with several replacement
</span><br>
<span class="quotelev2">&gt;&gt; malloc libraries. If the user application overloads mmap(), munmap()
</span><br>
<span class="quotelev2">&gt;&gt; and sbrk(), then it may or may not work. In this case, the user
</span><br>
<span class="quotelev2">&gt;&gt; should use MX_RCACHE=0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scott
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
<li><strong>Next message:</strong> <a href="4523.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4521.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4519.php">de Almeida, Valmor F.: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4531.php">de Almeida, Valmor F.: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Reply:</strong> <a href="4531.php">de Almeida, Valmor F.: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
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
