<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 26 14:28:37 2007" -->
<!-- isoreceived="20071026182837" -->
<!-- sent="Fri, 26 Oct 2007 14:28:33 -0400" -->
<!-- isosent="20071026182833" -->
<!-- name="Jinhui Qin" -->
<!-- email="jhqin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in runing MPI job through XGrid" -->
<!-- id="11a712d60710261128uaf69874qafed2857f0b9e4b2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="06ED962F-5F33-4141-A046-2CE48A3F40B9_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-10-26 14:28:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2510.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>Previous message:</strong> <a href="2508.php">George Bosilca: "[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>In reply to:</strong> <a href="2506.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Some good news and bad news. According to  the information provided
<br>
on <a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>,
<br>
<p>I have enabled X11Forward on all remote nodes, and
<br>
added the path to mpirun, which is &quot;/usr/local/bin&quot;, on all node, and
<br>
&nbsp;&quot;xhost +&quot; on my localhost, and
<br>
set the DISPLAY on all remote nodes as the DISPLAY value of my localhost.
<br>
Then,
<br>
&nbsp;I used &quot;mpirun -n [numberPros] --hostfile [filename] arg[0] ..&quot;  to start
<br>
the job on my localhost, it was still not working,
<br>
<p>&nbsp;But,  when I explicitly added the &quot;--prefix /usr/local&quot; and &quot;-x
<br>
DISPLAY=[localDISPLAYvalue]&quot; to start the job, everything was working: all
<br>
xwindows opened by remote nodes were displayed on my localhost machine. I
<br>
was so excited! Moreover, with all these --prefix and -x options to do
<br>
mpirun through XGrid (i.e. without adding --hostfile ) , it was still
<br>
working!
<br>
<p><p>Could you please tell me what things that I missed in setting all remote
<br>
nodes as I mentioned in above, so I don't  have to type all the options to
<br>
start this job?
<br>
<p>&nbsp;(I have also tried to add the prefix &quot;/usr/local&quot; to the PATH of each
<br>
remote node as well, it was still not working  if without  --prefix option).
<br>
<p><p>Thanks for any help.
<br>
<p>Jane
<br>
<p><p>On 10/26/07, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; XGrid does not forward X11 credentials, so you would have to setup an
</span><br>
<span class="quotelev1">&gt; X11 environment by yourself.  Using ssh or a local starter does
</span><br>
<span class="quotelev1">&gt; forward X11 credentials, which is why it works in that case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 25, 2007, at 10:23 PM, Jinhui Qin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Brian,
</span><br>
<span class="quotelev2">&gt; &gt;    I got another problem in running an MPI job through XGrid.
</span><br>
<span class="quotelev2">&gt; &gt; During the execution of this MPI job it will call Xlib functions
</span><br>
<span class="quotelev2">&gt; &gt; (i.e. XOpenDisplay()) to open an X window.  The XOpenDisplay()
</span><br>
<span class="quotelev2">&gt; &gt; function call failed (return &quot;null&quot;), it can not open a display no
</span><br>
<span class="quotelev2">&gt; &gt; matter how many processors that I requested.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, when I tuned off the xgrid controller, I used &quot;mpirun -n 4
</span><br>
<span class="quotelev2">&gt; &gt; &quot; to start the job again, four X windows opened properly, but four
</span><br>
<span class="quotelev2">&gt; &gt; processes were all running on the local machine instead of on any
</span><br>
<span class="quotelev2">&gt; &gt; remote nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have also tested to use &quot;ssh -x&quot; from a terminal of my local
</span><br>
<span class="quotelev2">&gt; &gt; machine to login to any other node in the cluster  to run the job
</span><br>
<span class="quotelev2">&gt; &gt; (I have the copies of the same job on all nodes and in the same
</span><br>
<span class="quotelev2">&gt; &gt; path), the X window can display on my local machine  properly. I
</span><br>
<span class="quotelev2">&gt; &gt; know it is &quot;-x&quot; option set up the environment properly for starting
</span><br>
<span class="quotelev2">&gt; &gt; the xwindow. If only use &quot;ssh&quot; without &quot;-x&quot; option, it won't work.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am wondering why the xwindow can not open if the job is started
</span><br>
<span class="quotelev2">&gt; &gt; through Xgrid.  How does the Xgrid controller contact to each agent
</span><br>
<span class="quotelev2">&gt; &gt; node?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there anyone who has seen a similar problem?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have installed X11 and OpenMPI on all 8 mac mini nodes in my
</span><br>
<span class="quotelev2">&gt; &gt; cluster, and have also tested running an  MPI job,  which  has no X
</span><br>
<span class="quotelev2">&gt; &gt; window function calls, through XGrid, it worked perfectly fine on
</span><br>
<span class="quotelev2">&gt; &gt; all nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot for any suggestions!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jane
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2509/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2510.php">Ethan Mallove: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>Previous message:</strong> <a href="2508.php">George Bosilca: "[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r16563"</a>
<li><strong>In reply to:</strong> <a href="2506.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
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
