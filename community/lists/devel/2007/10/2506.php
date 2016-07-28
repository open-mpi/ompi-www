<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 26 00:33:12 2007" -->
<!-- isoreceived="20071026043312" -->
<!-- sent="Thu, 25 Oct 2007 22:33:04 -0600" -->
<!-- isosent="20071026043304" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in runing MPI job through XGrid" -->
<!-- id="06ED962F-5F33-4141-A046-2CE48A3F40B9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="11a712d60710252123m5cf69901y6a3e9a505dfd2dc7_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-26 00:33:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2507.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16584"</a>
<li><strong>Previous message:</strong> <a href="2505.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>In reply to:</strong> <a href="2505.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2509.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Reply:</strong> <a href="2509.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
XGrid does not forward X11 credentials, so you would have to setup an  
<br>
X11 environment by yourself.  Using ssh or a local starter does  
<br>
forward X11 credentials, which is why it works in that case.
<br>
<p>Brian
<br>
<p>On Oct 25, 2007, at 10:23 PM, Jinhui Qin wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brian,
</span><br>
<span class="quotelev1">&gt;    I got another problem in running an MPI job through XGrid.  
</span><br>
<span class="quotelev1">&gt; During the execution of this MPI job it will call Xlib functions  
</span><br>
<span class="quotelev1">&gt; (i.e. XOpenDisplay()) to open an X window.  The XOpenDisplay()  
</span><br>
<span class="quotelev1">&gt; function call failed (return &quot;null&quot;), it can not open a display no  
</span><br>
<span class="quotelev1">&gt; matter how many processors that I requested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I tuned off the xgrid controller, I used &quot;mpirun -n 4  
</span><br>
<span class="quotelev1">&gt; &quot; to start the job again, four X windows opened properly, but four  
</span><br>
<span class="quotelev1">&gt; processes were all running on the local machine instead of on any  
</span><br>
<span class="quotelev1">&gt; remote nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also tested to use &quot;ssh -x&quot; from a terminal of my local  
</span><br>
<span class="quotelev1">&gt; machine to login to any other node in the cluster  to run the job  
</span><br>
<span class="quotelev1">&gt; (I have the copies of the same job on all nodes and in the same  
</span><br>
<span class="quotelev1">&gt; path), the X window can display on my local machine  properly. I  
</span><br>
<span class="quotelev1">&gt; know it is &quot;-x&quot; option set up the environment properly for starting  
</span><br>
<span class="quotelev1">&gt; the xwindow. If only use &quot;ssh&quot; without &quot;-x&quot; option, it won't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am wondering why the xwindow can not open if the job is started  
</span><br>
<span class="quotelev1">&gt; through Xgrid.  How does the Xgrid controller contact to each agent  
</span><br>
<span class="quotelev1">&gt; node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anyone who has seen a similar problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed X11 and OpenMPI on all 8 mac mini nodes in my  
</span><br>
<span class="quotelev1">&gt; cluster, and have also tested running an  MPI job,  which  has no X  
</span><br>
<span class="quotelev1">&gt; window function calls, through XGrid, it worked perfectly fine on  
</span><br>
<span class="quotelev1">&gt; all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot for any suggestions!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jane
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2507.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16584"</a>
<li><strong>Previous message:</strong> <a href="2505.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>In reply to:</strong> <a href="2505.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2509.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Reply:</strong> <a href="2509.php">Jinhui Qin: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
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
