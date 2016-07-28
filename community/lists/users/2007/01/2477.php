<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 17 10:45:24 2007" -->
<!-- isoreceived="20070117154524" -->
<!-- sent="Wed, 17 Jan 2007 07:45:12 -0800" -->
<!-- isosent="20070117154512" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ld_library_path not being updated" -->
<!-- id="5b7094580701170745x4b32751foae0d0f8436cfc58e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070117083152.GH6619_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-17 10:45:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2478.php">Brian W. Barrett: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2476.php">Ralph H Castain: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>In reply to:</strong> <a href="2473.php">Adrian Knoth: "Re: [OMPI users] ld_library_path not being updated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2481.php">Scott Atchley: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>Reply:</strong> <a href="2481.php">Scott Atchley: "Re: [OMPI users] ld_library_path not being updated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Adrian -
<br>
<p>Thanks for the reply.  I have been investigating this further.  It appears
<br>
that ssh isn't starting my .zshrc file.  This is strange.
<br>
<p>If I execute
<br>
<p><span class="quotelev1">&gt; ssh host-0 export
</span><br>
<p>I get only a minimal set of environment variables.  One of them is SHELL =
<br>
/bin/zsh.  There is no LD_LIBRARY_PATH in the list.
<br>
<p>If I ssh into host-0 and type &quot;export&quot;, I get my full list of variables.
<br>
<p>Seeing as how this is almost certainly an ssh problem, I should probably
<br>
take this to the openssh mailing list.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Brian
<br>
<p>On 1/17/07, Adrian Knoth &lt;adi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 16, 2007 at 05:22:35PM -0800, Brian Budge wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I run from host-0:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -np 4 -host host-0 myprogram
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have no problems, but if I run
</span><br>
<span class="quotelev3">&gt; &gt; &gt;mpirun -np 4 -host host-1 myprogram
</span><br>
<span class="quotelev2">&gt; &gt; error while loading shared libraries: libSGUL.so: cannot open shared
</span><br>
<span class="quotelev2">&gt; &gt; object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;mpirun -np 1 -host host-1 ldd myprogram
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         libSGUL.so =&gt; not found
</span><br>
<span class="quotelev2">&gt; &gt;         libOpenMesh_Core.so =&gt; not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously, you'll need these libs on host-1. Even more, they need
</span><br>
<span class="quotelev1">&gt; to be found in a system library dir (e.g. /usr/lib) or somewhere
</span><br>
<span class="quotelev1">&gt; inside LD_LIBRARY_PATH. I guess you already know that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I run the following, however, I see that my LD_LIBRARY_PATH is
</span><br>
<span class="quotelev1">&gt; correct:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -np 1 -host burn-0 echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The variable is expanded on the calling host:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; adi_at_ipc654:~$ echo $HOSTNAME
</span><br>
<span class="quotelev1">&gt; ipc654
</span><br>
<span class="quotelev1">&gt; adi_at_ipc654:~$ mpirun -np 1 -host amun3 echo $HOSTNAME
</span><br>
<span class="quotelev1">&gt; ipc654
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In other words: you're echoing your local LD_LIBRARY_PATH. If this
</span><br>
<span class="quotelev1">&gt; should be the same on host-1, either set it in your login scripts
</span><br>
<span class="quotelev1">&gt; (on host-1) or export it with -x:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; host-0:~$ mpirun -x LD_LIBRARY_PATH -host host-1 your_prog
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2477/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2478.php">Brian W. Barrett: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2476.php">Ralph H Castain: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>In reply to:</strong> <a href="2473.php">Adrian Knoth: "Re: [OMPI users] ld_library_path not being updated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2481.php">Scott Atchley: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>Reply:</strong> <a href="2481.php">Scott Atchley: "Re: [OMPI users] ld_library_path not being updated"</a>
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
