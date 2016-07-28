<?
$subject_val = "Re: [OMPI users] mpi &amp; mac";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 10:42:30 2011" -->
<!-- isoreceived="20110706144230" -->
<!-- sent="Wed, 6 Jul 2011 16:42:24 +0200" -->
<!-- isosent="20110706144224" -->
<!-- name="Constantinos Makassikis" -->
<!-- email="cmakassikis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi &amp;amp; mac" -->
<!-- id="CAN601uP+AQFyMLnOMd7bWJaUR0ZH9beGXobeGg=kdyDjDKMxyQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B4E5AD74-3578-441C-9431-3936588A24B0_at_usc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi &amp; mac<br>
<strong>From:</strong> Constantinos Makassikis (<em>cmakassikis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-06 10:42:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16834.php">Prentice Bisbal: "Re: [OMPI users] mpi &amp; mac"</a>
<li><strong>Previous message:</strong> <a href="16832.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>In reply to:</strong> <a href="16824.php">Robert Sacker: "[OMPI users] mpi &amp; mac"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16834.php">Prentice Bisbal: "Re: [OMPI users] mpi &amp; mac"</a>
<li><strong>Reply:</strong> <a href="16834.php">Prentice Bisbal: "Re: [OMPI users] mpi &amp; mac"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 5, 2011 at 9:48 PM, Robert Sacker &lt;rsacker_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
Hello !
<br>
<p><span class="quotelev1">&gt; I need some help. I'm trying to run C++ code in Xcode on a Mac Pro Desktop
</span><br>
<span class="quotelev1">&gt; (OS 10.6) and utilize all 8 cores . My ultimate goal is to be able to run
</span><br>
<span class="quotelev1">&gt; the code on the cluster here on campus. I'm in the process of
</span><br>
<span class="quotelev1">&gt; converting into C++ the number crunching part of the stuff I previously
</span><br>
<span class="quotelev1">&gt; wrote in Matlab.
</span><br>
<span class="quotelev1">&gt; Is there some documentation that explains how to get started? Thanks. Bob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I am not sure whether this is the relevant mailing list for
<br>
general parallelization questions ...
<br>
<p>In any case, before converting your Matlab code to C++ try using
<br>
parallelization features that come with Matlab.
<br>
<p>Otherwise, after translating your Matlab code to C++, you should
<br>
consider in the first place getting acquainted with OpenMP and
<br>
use it to speed up your code on your 8-core machine.
<br>
OpenMP can be rather straightforward to apply.
<br>
<p>Afterwards, if necessary, you may look into parallelizing over multiple
<br>
machines with OpenMPI.
<br>
<p>Someone advised an interesting link to online courses on parallelism
<br>
(OpenMP and OpenMPI) in the following post
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/01/11922.php">http://www.open-mpi.org/community/lists/users/2010/01/11922.php</a>
<br>
<p><p>HTH,
<br>
<p><pre>
--
Constantinos
&gt; &quot;Do everything in moderation--including moderation.&quot;
&gt;
&gt; Robert J. Sacker, PhD
&gt; Professor
&gt; Department of Mathematics
&gt; University of Southern California
&gt; 3620 S. Vermont Ave., KAP 108
&gt; Los Angeles, CA 90089-2532    (office KAP 120B)
&gt; (213) 740-3793,  (213) 740-2424 FAX
&gt; <a href="http://www-bcf.usc.edu/~rsacker">http://www-bcf.usc.edu/~rsacker</a>
&gt; <a href="http://www.scholarpedia.org/article/Neimark-Sacker_bifurcation">http://www.scholarpedia.org/article/Neimark-Sacker_bifurcation</a>
&gt; Editor, Short Notes, Journal of Difference Equations and Applications
&gt; <a href="http://www.tandf.co.uk/journals/titles/10236198.asp">http://www.tandf.co.uk/journals/titles/10236198.asp</a>
&gt;
&gt;
&gt;
&gt;
&gt;
&gt;
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16833/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16834.php">Prentice Bisbal: "Re: [OMPI users] mpi &amp; mac"</a>
<li><strong>Previous message:</strong> <a href="16832.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.5.2 installation problem"</a>
<li><strong>In reply to:</strong> <a href="16824.php">Robert Sacker: "[OMPI users] mpi &amp; mac"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16834.php">Prentice Bisbal: "Re: [OMPI users] mpi &amp; mac"</a>
<li><strong>Reply:</strong> <a href="16834.php">Prentice Bisbal: "Re: [OMPI users] mpi &amp; mac"</a>
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
