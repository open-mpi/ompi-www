<?
$subject_val = "Re: [OMPI users] regarding the problem occurred while running an	mpi programs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 11:27:28 2012" -->
<!-- isoreceived="20120425152728" -->
<!-- sent="Wed, 25 Apr 2012 15:26:54 +0000" -->
<!-- isosent="20120425152654" -->
<!-- name="tyler.balson_at_[hidden]" -->
<!-- email="tyler.balson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] regarding the problem occurred while running an	mpi programs" -->
<!-- id="FEDD277BE5C6E9439BE85976C98CDB301864C9FF_at_CH1PRD0102MB134.prod.exchangelabs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJ_xm3BhQmwLYxmSsMtes+5ZN9qQ9TfECSicTdG9jabC=Az9yg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] regarding the problem occurred while running an	mpi programs<br>
<strong>From:</strong> <a href="mailto:tyler.balson_at_[hidden]?Subject=Re:%20[OMPI%20users]%20regarding%20the%20problem%20occurred%20while%20running%20an	mpi%20programs"><em>tyler.balson_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-04-25 11:26:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>Previous message:</strong> <a href="19125.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>In reply to:</strong> <a href="19125.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Now you need to set your path in your bash profile as Jeff suggested
<br>
________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of seshendra seshu [seshu199_at_[hidden]]
<br>
Sent: Wednesday, April 25, 2012 10:24 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] regarding the problem occurred while running an mpi programs
<br>
<p>Hi
<br>
now i have created an used and tried to run the program but i got the following error
<br>
<p>[master_at_ip-10-80-106-70 ~]$ mpirun -n 1 --hostfile hostfile out
<br>
out: error while loading shared libraries: libmpi_cxx.so.0: cannot open shared object file: No such file or directory
<br>
<p><p>thanking you
<br>
<p><p><p>On Wed, Apr 25, 2012 at 5:12 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
On Apr 25, 2012, at 11:06 AM, seshendra seshu wrote:
<br>
<p><span class="quotelev1">&gt; so should i need to create an user and run the mpi program. or how can i run in cluster
</span><br>
<p>It is a &quot;best practice&quot; to not run real applications as root (e.g., MPI applications).  Create a non-privlidged user to run your applications.
<br>
<p>Then be sure to set your LD_LIBRARY_PATH if you installed Open MPI into a non-system-default location.  See this FAQ item:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
 WITH REGARDS
M.L.N.Seshendra
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19126/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>Previous message:</strong> <a href="19125.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>In reply to:</strong> <a href="19125.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
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
