<?
$subject_val = "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 13:46:17 2015" -->
<!-- isoreceived="20150114184617" -->
<!-- sent="Wed, 14 Jan 2015 13:45:22 -0500" -->
<!-- isosent="20150114184522" -->
<!-- name="Novosielski, Ryan" -->
<!-- email="novosirj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2" -->
<!-- id="ADFBD4B618944F499D05722136ECD99388B6371A7A_at_umdexmbx02" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54B6B923.1030100_at_iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2<br>
<strong>From:</strong> Novosielski, Ryan (<em>novosirj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-14 13:45:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26180.php">Rob Latham: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="26178.php">Ray Sheppard: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<li><strong>In reply to:</strong> <a href="26178.php">Ray Sheppard: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's worth noting that the solution solved the problem.
<br>
<p>I'm running on RHEL5, which seems like it's actually where the problem comes from.
<br>
<p><pre>
--
____ *Note: UMDNJ is now Rutgers-Biomedical and Health Sciences*
 || \\UTGERS      |---------------------*O*---------------------
 ||_// Biomedical | Ryan Novosielski - Senior Technologist
 || \\ and Health | novosirj_at_[hidden] - 973/972.0922 (2x0922)
 ||  \\  Sciences | OIRT/High Perf &amp; Res Comp - MSB C630, Newark
      `'
________________________________________
From: users [users-bounces_at_[hidden]] On Behalf Of Ray Sheppard [rsheppar_at_[hidden]]
Sent: Wednesday, January 14, 2015 1:44 PM
To: Open MPI Users
Subject: Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2
Gilles,
  The issue you pointed Ryan to was with GCC 4.8.2 not 4.9.2.  I just built version 1.8.4 on a RHEL6 machine yesterday without special switches but with GCC 4.9.2.
                    Ray
On 1/14/2015 11:13 AM, Novosielski, Ryan wrote:
Thank you. I did a search, but somehow did not turn that up. I guess I had looked for GCC 4.9.
____ *Note: UMDNJ is now Rutgers-Biomedical and Health Sciences*
|| \\UTGERS      |---------------------*O*---------------------
||_// Biomedical | Ryan Novosielski - Senior Technologist
|| \\ and Health | novosirj_at_[hidden]&lt;mailto:novosirj_at_[hidden]&gt;- 973/972.0922 (2x0922)
||  \\  Sciences | OIRT/High Perf &amp; Res Comp - MSB C630, Newark
    `'
On Jan 14, 2015, at 03:20, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
Ryan,
this issue has already been reported.
please refer to <a href="http://www.open-mpi.org/community/lists/users/2015/01/26134.php">http://www.open-mpi.org/community/lists/users/2015/01/26134.php</a> for a workaround
Cheers,
Gilles
On 2015/01/14 16:35, Novosielski, Ryan wrote:
OpenMPI 1.8.4 does not appear to be buildable with GCC 4.9.2. The output, as requested by the Getting Help page, is attached.
I believe I tried GCC 4.9.0 too and it didn't work.
I did successfully build it with Intel's compiler suite v15.0.1, so I do appear to know what I'm doing.
Thanks in advance for your help.
--
____ *Note: UMDNJ is now Rutgers-Biomedical and Health Sciences*
 || \\UTGERS      |---------------------*O*---------------------
 ||_// Biomedical | Ryan Novosielski - Senior Technologist
 || \\ and Health | novosirj_at_[hidden]&lt;mailto:novosirj_at_[hidden]&gt; - 973/972.0922 (2x0922)
 ||  \\  Sciences | OIRT/High Perf &amp; Res Comp - MSB C630, Newark
      `'
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26173.php">http://www.open-mpi.org/community/lists/users/2015/01/26173.php</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26174.php">http://www.open-mpi.org/community/lists/users/2015/01/26174.php</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26177.php">http://www.open-mpi.org/community/lists/users/2015/01/26177.php</a>
--
                         Respectfully,
                           Ray Sheppard
                           RSheppar_at_[hidden]&lt;mailto:RSheppar_at_[hidden]&gt;
                           <a href="http://rt.uits.iu.edu/systems/SciAPT">http://rt.uits.iu.edu/systems/SciAPT</a>
                           317-274-0016
                   Principal Analyst
                   Senior Technical Lead
                   Scientific Applications and Performance Tuning
                   Research Technologies
                   University Information Technological Services
                   IUPUI campus
                   Indiana University
   My &quot;pithy&quot; saying:  Science is the art of translating the world
       into language. Unfortunately, that language is mathematics.
   Bumper sticker wisdom: Make it idiot-proof and they will make a
       better idiot.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26180.php">Rob Latham: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="26178.php">Ray Sheppard: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<li><strong>In reply to:</strong> <a href="26178.php">Ray Sheppard: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
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
