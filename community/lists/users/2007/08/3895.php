<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 21 13:46:53 2007" -->
<!-- isoreceived="20070821174653" -->
<!-- sent="Tue, 21 Aug 2007 13:46:50 -0400" -->
<!-- isosent="20070821174650" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI." -->
<!-- id="7FE5F6C8-A736-4036-AEEC-9059E86C733B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="94f1baee0708211009s7425b4cbpe1f51d3d6101b70d_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-21 13:46:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3896.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>Previous message:</strong> <a href="3894.php">Hiep Bui Hoang: "[OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>In reply to:</strong> <a href="3894.php">Hiep Bui Hoang: "[OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3896.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>Reply:</strong> <a href="3896.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>Reply:</strong> <a href="3901.php">Hiep Bui Hoang: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>There are a few things you need to do to build Open MPI with  
<br>
Checkpoint/Restart support. By default Open MPI is configured without  
<br>
checkpoint/restart support.
<br>
1) Make sure you have BLCR successfully installed and loaded on your  
<br>
system(s)
<br>
2) configure Open MPI with the &quot;--with-ft=cr&quot; option, which enables  
<br>
checkpoint/restart fault tolerance
<br>
&nbsp;&nbsp;Note: you may also have to specify the install directory of BLCR  
<br>
with the &quot;--with-blcr=/path/to/blcr&quot;
<br>
3) make and make install
<br>
<p>The resultant build will have support for checkpoint/restart and the  
<br>
tools (e.g., ompi-checkpoint, ompi-restart) will become available.
<br>
<p>Looking at the documentation it doesn't seem to include these steps.  
<br>
I'll fix that later today, and post and updated file to the wiki.  
<br>
Sorry about that. :(
<br>
<p>Hope this helps,
<br>
Josh
<br>
<p>On Aug 21, 2007, at 1:09 PM, Hiep Bui Hoang wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I'm Hiep, I'm trying to use checkpoint/restart feature in Open MPI.  
</span><br>
<span class="quotelev1">&gt; I had read information about this feature in  <a href="https://svn.open">https://svn.open</a>- 
</span><br>
<span class="quotelev1">&gt; mpi.org/trac/ompi/wiki/ProcessFT_CR and Open-MPI-FT-CR-Draft- 
</span><br>
<span class="quotelev1">&gt; v1.pdf. I had built Open MPI from &quot;trunk&quot; which gotten by Subversion.
</span><br>
<span class="quotelev1">&gt; But I don't know how to enable checkpoint/restart fault tolerance  
</span><br>
<span class="quotelev1">&gt; in Open MPI.
</span><br>
<span class="quotelev1">&gt; So that, I get this error when I try this command: ompi-checkpoint.
</span><br>
<span class="quotelev1">&gt;        bash: ompi-checkpoint: command not found
</span><br>
<span class="quotelev1">&gt; I want to ask you how to build and use checkpoint/restart feature  
</span><br>
<span class="quotelev1">&gt; in Open MPI.
</span><br>
<span class="quotelev1">&gt; Please tell me in details, I'm a new user.
</span><br>
<span class="quotelev1">&gt; Thanks!
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
<li><strong>Next message:</strong> <a href="3896.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>Previous message:</strong> <a href="3894.php">Hiep Bui Hoang: "[OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>In reply to:</strong> <a href="3894.php">Hiep Bui Hoang: "[OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3896.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>Reply:</strong> <a href="3896.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>Reply:</strong> <a href="3901.php">Hiep Bui Hoang: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
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
