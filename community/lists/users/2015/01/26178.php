<?
$subject_val = "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 13:42:44 2015" -->
<!-- isoreceived="20150114184244" -->
<!-- sent="Wed, 14 Jan 2015 13:44:51 -0500" -->
<!-- isosent="20150114184451" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2" -->
<!-- id="54B6B923.1030100_at_iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C7531EA8-AEB2-47AD-AD88-D7DFE3A72B60_at_ca.rutgers.edu" -->
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
<strong>From:</strong> Ray Sheppard (<em>rsheppar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-14 13:44:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26179.php">Novosielski, Ryan: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<li><strong>Previous message:</strong> <a href="26177.php">Novosielski, Ryan: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<li><strong>In reply to:</strong> <a href="26177.php">Novosielski, Ryan: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26179.php">Novosielski, Ryan: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<li><strong>Reply:</strong> <a href="26179.php">Novosielski, Ryan: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
&nbsp;&nbsp;&nbsp;The issue you pointed Ryan to was with GCC 4.8.2 not 4.9.2.  I just 
<br>
built version 1.8.4 on a RHEL6 machine yesterday without special 
<br>
switches but with GCC 4.9.2.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ray
<br>
<p>On 1/14/2015 11:13 AM, Novosielski, Ryan wrote:
<br>
<span class="quotelev1">&gt; Thank you. I did a search, but somehow did not turn that up. I guess I 
</span><br>
<span class="quotelev1">&gt; had looked for GCC 4.9.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ____ *Note: UMDNJ is now Rutgers-Biomedical and Health Sciences*
</span><br>
<span class="quotelev1">&gt; || \\UTGERS      |---------------------*O*---------------------
</span><br>
<span class="quotelev1">&gt; ||_// Biomedical | Ryan Novosielski - Senior Technologist
</span><br>
<span class="quotelev1">&gt; || \\ and Health | novosirj_at_[hidden] &lt;mailto:novosirj_at_[hidden]&gt;- 
</span><br>
<span class="quotelev1">&gt; 973/972.0922 (2x0922)
</span><br>
<span class="quotelev1">&gt; ||  \\  Sciences | OIRT/High Perf &amp; Res Comp - MSB C630, Newark
</span><br>
<span class="quotelev1">&gt;     `'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 14, 2015, at 03:20, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ryan,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this issue has already been reported.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; please refer to 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26134.php">http://www.open-mpi.org/community/lists/users/2015/01/26134.php</a> for a 
</span><br>
<span class="quotelev2">&gt;&gt; workaround
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2015/01/14 16:35, Novosielski, Ryan wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.8.4 does not appear to be buildable with GCC 4.9.2. The output, as requested by the Getting Help page, is attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe I tried GCC 4.9.0 too and it didn't work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did successfully build it with Intel's compiler suite v15.0.1, so I do appear to know what I'm doing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance for your help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ____ *Note: UMDNJ is now Rutgers-Biomedical and Health Sciences*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   || \\UTGERS      |---------------------*O*---------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ||_// Biomedical | Ryan Novosielski - Senior Technologist
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   || \\ and Health |novosirj_at_[hidden]  - 973/972.0922 (2x0922)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ||  \\  Sciences | OIRT/High Perf &amp; Res Comp - MSB C630, Newark
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        `'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/01/26173.php">http://www.open-mpi.org/community/lists/users/2015/01/26173.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26174.php">http://www.open-mpi.org/community/lists/users/2015/01/26174.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26177.php">http://www.open-mpi.org/community/lists/users/2015/01/26177.php</a>
</span><br>
<p><pre>
-- 
                          Respectfully,
                            Ray Sheppard
                            RSheppar_at_[hidden]
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26178/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26179.php">Novosielski, Ryan: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<li><strong>Previous message:</strong> <a href="26177.php">Novosielski, Ryan: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<li><strong>In reply to:</strong> <a href="26177.php">Novosielski, Ryan: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26179.php">Novosielski, Ryan: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<li><strong>Reply:</strong> <a href="26179.php">Novosielski, Ryan: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
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
