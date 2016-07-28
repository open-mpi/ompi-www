<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 26 00:23:44 2007" -->
<!-- isoreceived="20071026042344" -->
<!-- sent="Fri, 26 Oct 2007 00:23:40 -0400" -->
<!-- isosent="20071026042340" -->
<!-- name="Jinhui Qin" -->
<!-- email="jhqin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in runing MPI job through XGrid" -->
<!-- id="11a712d60710252123m5cf69901y6a3e9a505dfd2dc7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="485EEACF-364E-483D-B856-314E6454D0F7_at_open-mpi.org" -->
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
<strong>From:</strong> Jinhui Qin (<em>jhqin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-26 00:23:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2506.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Previous message:</strong> <a href="2504.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>In reply to:</strong> <a href="2414.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2506.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Reply:</strong> <a href="2506.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
&nbsp;&nbsp;&nbsp;I got another problem in running an MPI job through XGrid. During the
<br>
execution of this MPI job it will call Xlib functions (i.e. XOpenDisplay())
<br>
to open an X window.  The XOpenDisplay() function call failed (return
<br>
&quot;null&quot;), it can not open a display no matter how many processors that I
<br>
requested.
<br>
<p>However, when I tuned off the xgrid controller, I used &quot;mpirun -n 4 &quot; to
<br>
start the job again, four X windows opened properly, but four processes were
<br>
all running on the local machine instead of on any remote nodes.
<br>
<p>I have also tested to use &quot;ssh -x&quot; from a terminal of my local machine to
<br>
login to any other node in the cluster  to run the job (I have the copies of
<br>
the same job on all nodes and in the same path), the X window can display on
<br>
my local machine  properly. I know it is &quot;-x&quot; option set up the environment
<br>
properly for starting the xwindow. If only use &quot;ssh&quot; without &quot;-x&quot; option, it
<br>
won't work.
<br>
<p>I am wondering why the xwindow can not open if the job is started through
<br>
Xgrid.  How does the Xgrid controller contact to each agent node?
<br>
<p>Is there anyone who has seen a similar problem?
<br>
<p>I have installed X11 and OpenMPI on all 8 mac mini nodes in my cluster, and
<br>
have also tested running an  MPI job,  which  has no X window function
<br>
calls, through XGrid, it worked perfectly fine on all nodes.
<br>
<p>Thanks a lot for any suggestions!
<br>
<p>Jane
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2505/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2506.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Previous message:</strong> <a href="2504.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;connect&quot; field to openib BTL INI file"</a>
<li><strong>In reply to:</strong> <a href="2414.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2506.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Reply:</strong> <a href="2506.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
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
