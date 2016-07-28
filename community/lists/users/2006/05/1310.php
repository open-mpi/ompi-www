<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 06:58:42 2006" -->
<!-- isoreceived="20060526105842" -->
<!-- sent="Fri, 26 May 2006 06:58:34 -0400" -->
<!-- isosent="20060526105834" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getting started with openMPI" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FD5F8_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] getting started with openMPI" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-26 06:58:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1311.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Default configure options"</a>
<li><strong>Previous message:</strong> <a href="1309.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Thread Safety"</a>
<li><strong>Maybe in reply to:</strong> <a href="1307.php">imran shaik: "[OMPI users] getting started with openMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should probably look at the README file that is included with Open
<br>
MPI -- it has instructions for compiling and installing Open MPI.
<br>
Additionally, there is quite a bit of information in the Open MPI FAQ,
<br>
particularly under the &quot;Building Open MPI&quot; section
<br>
(<a href="http://www.open-mpi.org/faq/?category=building">http://www.open-mpi.org/faq/?category=building</a>).
<br>
&nbsp;
<br>
Open MPI does not have lamboot, lamclean, wipe, lamgrow -- these are
<br>
LAM-specific commands.  See the &quot;Running MPI Jobs&quot; section of the Open
<br>
MPI FAQ (<a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>).
<br>
&nbsp;
<br>
Open MPI does provide the C++ MPI bindings, typically without any
<br>
additional libraries (you need a functioning C++ compiler that is
<br>
compile- and link-compatible with your C compiler, of course).
<br>
<p><p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]
<br>
[mailto:users-bounces_at_[hidden]] On Behalf Of imran shaik
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Friday, May 26, 2006 2:04 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: openMPI mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: [OMPI users] getting started with openMPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi ,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am a newbie of openMPI.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I was running LAM/MPI. I was able to buld latest version of lam
<br>
7.1.2.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am using RedHat 9(shrike). 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do i need additional libraries to build openMPI? Can i just
<br>
build in a simple way as in LAM/MPI?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Are there any equivalents of lamboot,lamclean, wipe, lamgrow
<br>
tools in openMPI?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Does openMPI provide C++ support without any additional
<br>
libraries(on my system) as in LAM/MPI 7.1.2?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sorry for flooding with too many questions. I actually need to
<br>
make quick decision on OpenMPI. :-(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks in advance.!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Imran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do You Yahoo!?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tired of spam? Yahoo! Mail has the best spam protection around 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1310/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1311.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Default configure options"</a>
<li><strong>Previous message:</strong> <a href="1309.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Thread Safety"</a>
<li><strong>Maybe in reply to:</strong> <a href="1307.php">imran shaik: "[OMPI users] getting started with openMPI"</a>
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
