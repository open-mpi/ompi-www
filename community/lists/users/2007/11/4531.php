<?
$subject_val = "Re: [OMPI users] warning:regcache incompatible with malloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 27 16:45:25 2007" -->
<!-- isoreceived="20071127214525" -->
<!-- sent="Tue, 27 Nov 2007 16:45:19 -0500" -->
<!-- isosent="20071127214519" -->
<!-- name="de Almeida, Valmor F." -->
<!-- email="dealmeidav_at_[hidden]" -->
<!-- subject="Re: [OMPI users] warning:regcache incompatible with malloc" -->
<!-- id="D2D7D9FE2492524A925313E2D82E1B530718C3BA_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="474C3997.9040103_at_open-mpi.org" -->
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
<strong>From:</strong> de Almeida, Valmor F. (<em>dealmeidav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-27 16:45:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4532.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4530.php">Jeff Squyres: "[OMPI users] Fwd: [all-osl-users] OSL system outage"</a>
<li><strong>In reply to:</strong> <a href="4522.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3633.php">George Bosilca: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks,
<br>
<p><pre>
--
Valmor
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
On
&gt; Behalf Of Tim Prins
&gt; Sent: Tuesday, November 27, 2007 10:37 AM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] warning:regcache incompatible with malloc
&gt; 
&gt; Hi Valmor,
&gt; 
&gt; I prefer to just set the environment variable in my .bashrc so I never
&gt; have to think about it again. Also it might be slightly better since
&gt; Open MPI tries to be network neutral, and linking the application
&gt; against the Myrinet libraries violates that principle. But if you are
&gt; only ever going to use the particular compilation with Myrinet
anyways,
&gt; I suppose it does not matter.
&gt; 
&gt; I guess this is a long way of saying that it is just personal
preference.
&gt; 
&gt; Hope this helps,
&gt; 
&gt; Tim
&gt; 
&gt; 
&gt; de Almeida, Valmor F. wrote:
&gt; &gt; Hello,
&gt; &gt;
&gt; &gt; I am getting the warnings after an upgrade to
&gt; &gt; mx-1.2.4 and openmpi-1.2.4.
&gt; &gt;
&gt; &gt; Either using the env variable setting MX_RCACHE=2, or linking the
&gt; &gt; application with -lmyriexpress removes the warnings.
&gt; &gt;
&gt; &gt; Is either one of them the preferred way of doing it?
&gt; &gt;
&gt; &gt; Thanks,
&gt; &gt;
&gt; &gt; --
&gt; &gt; Valmor
&gt; &gt;
&gt; &gt;&gt; -----Original Message-----
&gt; &gt;&gt; From: users-bounces_at_[hidden]
[mailto:users-bounces_at_[hidden]]
&gt; &gt; On
&gt; &gt;&gt; Behalf Of Scott Atchley
&gt; &gt;&gt; Sent: Tuesday, July 10, 2007 3:31 PM
&gt; &gt;&gt; To: Open MPI Users
&gt; &gt;&gt; Subject: Re: [OMPI users] warning:regcache incompatible with malloc
&gt; &gt;&gt;
&gt; &gt;&gt; On Jul 10, 2007, at 3:24 PM, Tim Prins wrote:
&gt; &gt;&gt;
&gt; &gt;&gt;&gt; On Tuesday 10 July 2007 03:11:45 pm Scott Atchley wrote:
&gt; &gt;&gt;&gt;&gt; On Jul 10, 2007, at 2:58 PM, Scott Atchley wrote:
&gt; &gt;&gt;&gt;&gt;&gt; Tim, starting with the recently released 1.2.1, it is the
default.
&gt; &gt;&gt;&gt;&gt; To clarify, MX_RCACHE=1 is the default.
&gt; &gt;&gt;&gt; It would be good for the default to be something where there is no
&gt; &gt;&gt;&gt; warning
&gt; &gt;&gt;&gt; printed (i.e. 0 or 2). I see the warning on the current trunk.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Tim
&gt; &gt;&gt; After further discussion in-house, the warning can be avoided if -
&gt; &gt;&gt; lmyriexpress is included when linking the app (i.e. if it is in
mpicc
&gt; &gt;&gt; when linking).
&gt; &gt;&gt;
&gt; &gt;&gt; Another clarification, the regache does work with several
replacement
&gt; &gt;&gt; malloc libraries. If the user application overloads mmap(),
munmap()
&gt; &gt;&gt; and sbrk(), then it may or may not work. In this case, the user
&gt; &gt;&gt; should use MX_RCACHE=0.
&gt; &gt;&gt;
&gt; &gt;&gt; Scott
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4532.php">Jeff Squyres: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4530.php">Jeff Squyres: "[OMPI users] Fwd: [all-osl-users] OSL system outage"</a>
<li><strong>In reply to:</strong> <a href="4522.php">Tim Prins: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3633.php">George Bosilca: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
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
