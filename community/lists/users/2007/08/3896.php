<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 21 14:42:40 2007" -->
<!-- isoreceived="20070821184240" -->
<!-- sent="Tue, 21 Aug 2007 14:42:37 -0400" -->
<!-- isosent="20070821184237" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI." -->
<!-- id="8FECEB99-9CB8-4FE2-9A29-B88516B99C0F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7FE5F6C8-A736-4036-AEEC-9059E86C733B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-08-21 14:42:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3897.php">Josh Aune: "[OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<li><strong>Previous message:</strong> <a href="3895.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>In reply to:</strong> <a href="3895.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3901.php">Hiep Bui Hoang: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just updated the Users Guide on the wiki. I added the following  
<br>
sections:
<br>
&nbsp;&nbsp;- Compiling and Building
<br>
&nbsp;&nbsp;- Example Checkpoint/Restart Use Cases
<br>
<p>Let me know if you have any trouble with this work.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Aug 21, 2007, at 1:46 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are a few things you need to do to build Open MPI with
</span><br>
<span class="quotelev1">&gt; Checkpoint/Restart support. By default Open MPI is configured without
</span><br>
<span class="quotelev1">&gt; checkpoint/restart support.
</span><br>
<span class="quotelev1">&gt; 1) Make sure you have BLCR successfully installed and loaded on your
</span><br>
<span class="quotelev1">&gt; system(s)
</span><br>
<span class="quotelev1">&gt; 2) configure Open MPI with the &quot;--with-ft=cr&quot; option, which enables
</span><br>
<span class="quotelev1">&gt; checkpoint/restart fault tolerance
</span><br>
<span class="quotelev1">&gt;   Note: you may also have to specify the install directory of BLCR
</span><br>
<span class="quotelev1">&gt; with the &quot;--with-blcr=/path/to/blcr&quot;
</span><br>
<span class="quotelev1">&gt; 3) make and make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The resultant build will have support for checkpoint/restart and the
</span><br>
<span class="quotelev1">&gt; tools (e.g., ompi-checkpoint, ompi-restart) will become available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the documentation it doesn't seem to include these steps.
</span><br>
<span class="quotelev1">&gt; I'll fix that later today, and post and updated file to the wiki.
</span><br>
<span class="quotelev1">&gt; Sorry about that. :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 21, 2007, at 1:09 PM, Hiep Bui Hoang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; I'm Hiep, I'm trying to use checkpoint/restart feature in Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; I had read information about this feature in  <a href="https://svn.open">https://svn.open</a>-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org/trac/ompi/wiki/ProcessFT_CR and Open-MPI-FT-CR-Draft-
</span><br>
<span class="quotelev2">&gt;&gt; v1.pdf. I had built Open MPI from &quot;trunk&quot; which gotten by Subversion.
</span><br>
<span class="quotelev2">&gt;&gt; But I don't know how to enable checkpoint/restart fault tolerance
</span><br>
<span class="quotelev2">&gt;&gt; in Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; So that, I get this error when I try this command: ompi-checkpoint.
</span><br>
<span class="quotelev2">&gt;&gt;        bash: ompi-checkpoint: command not found
</span><br>
<span class="quotelev2">&gt;&gt; I want to ask you how to build and use checkpoint/restart feature
</span><br>
<span class="quotelev2">&gt;&gt; in Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; Please tell me in details, I'm a new user.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="3897.php">Josh Aune: "[OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<li><strong>Previous message:</strong> <a href="3895.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>In reply to:</strong> <a href="3895.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3901.php">Hiep Bui Hoang: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
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
