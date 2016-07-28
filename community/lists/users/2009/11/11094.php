<?
$subject_val = "Re: [OMPI users] mpirun example program fail on multiple nodes- unable to launch specified application on client node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 11:44:21 2009" -->
<!-- isoreceived="20091106164421" -->
<!-- sent="Fri, 6 Nov 2009 10:44:16 -0600" -->
<!-- isosent="20091106164416" -->
<!-- name="qing.pang" -->
<!-- email="qing.pang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun example program fail on multiple nodes- unable to launch specified application on client node" -->
<!-- id="4192e1870911060844t2e6791bby3be33cf83cb8e6b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E8BC506E-B25A-4826-A6A8-438655CB42DB_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun example program fail on multiple nodes- unable to launch specified application on client node<br>
<strong>From:</strong> qing.pang (<em>qing.pang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 11:44:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11095.php">amjad ali: "[OMPI users] Programming Help needed"</a>
<li><strong>Previous message:</strong> <a href="11093.php">Arnaud Westenberg: "[OMPI users] Distribute app over open mpi"</a>
<li><strong>In reply to:</strong> <a href="11084.php">Josh Hursey: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This sounds like what I need exactly. But when I tried it, I got the
<br>
following problem - I'm working on my Desktop, and trying to preload
<br>
the executable to my laptop.
<br>
<p>--------------------------------------------------------------------------
<br>
gordon_at_gordon-desktop:~/Desktop/openmpi-1.3.3/examples$ mpirun
<br>
-machinefile machine.linux -np 2 --preload-binary $(pwd)/hello_c.out
<br>
gordon_at_gordon-desktop's password:
<br>
--------------------------------------------------------------------------
<br>
WARNING: Remote peer ([[18118,0],1]) failed to preload a file.
<br>
<p>Exit Status: 256
<br>
Local&#160; File: /tmp/openmpi-sessions-gordon_at_gordon-laptop_0/18118/0/hello_c.out
<br>
Remote File: /home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
<br>
Command:
<br>
&#160; scp&#160; gordon-desktop:/home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
<br>
/tmp/openmpi-sessions-gordon_at_gordon-laptop_0/18118/0/hello_c.out
<br>
<p>Will continue attempting to launch the process(es).
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it could not access
<br>
or execute an executable:
<br>
<p>Executable: /home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
<br>
Node: node1
<br>
<p>while attempting to start process rank 1.
<br>
--------------------------------------------------------------------------
<br>
<p><p>I typed in my password for master node account when asked for it. But
<br>
why I was asked for my password on master node - I am working under
<br>
this account anyway?
<br>
<p>--qing
<br>
<p><p>On Fri, Nov 6, 2009 at 7:09 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As an alternative technique for distributing the binary, you could ask Open MPI's runtime to do it for you (made available in the v1.3 series). You still need to make sure that the same version of Open is installed on all nodes, but if you pass the --preload-binary option to mpirun the runtime environment will distribute the binary across the machine (staging it to a temporary directory) before launching it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can do the same with any arbitrary set of files or directories (comma separated) using the --preload-files option as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you type 'mpirun --help' the options that you are looking for are:
</span><br>
<span class="quotelev1">&gt; --------------------
</span><br>
<span class="quotelev1">&gt; &#160; --preload-files &lt;arg0&gt;
</span><br>
<span class="quotelev1">&gt; &#160; --preload-files-dest-dir &lt;arg0&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; with --preload-files. By default the absolute and
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; relative paths provided by --preload-files are
</span><br>
<span class="quotelev1">&gt; -s|--preload-binary &#160; &#160; &#160;Preload the binary on the remote machine before
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 5, 2009, at 6:56 PM, Terry Frankcombe wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For small ad hoc COWs I'd vote for sshfs too. &#160;It may well be as slow as
</span><br>
<span class="quotelev2">&gt;&gt; a dog, but it actually has some security, unlike NFS, and is a doddle to
</span><br>
<span class="quotelev2">&gt;&gt; make work with no superuser access on the server, unlike NFS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 2009-11-05 at 17:53 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 5, 2009, at 5:34 PM, Douglas Guptill wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am currently using sshfs to mount both OpenMPI and my application on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the &quot;other&quot; computers/nodes. &#160;The advantage to this is that I have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only one copy of OpenMPI and my application. &#160;There may be a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; performance penalty, but I haven't seen it yet.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For a small number of nodes (where small &lt;=32 or sometimes even &lt;=64),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I find that simple NFS works just fine. &#160;If your apps aren't IO
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intensive, that can greatly simplify installation and deployment of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both Open MPI and your MPI applications IMNSHO.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But -- every app is different. &#160;:-) &#160;YMMV.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="11095.php">amjad ali: "[OMPI users] Programming Help needed"</a>
<li><strong>Previous message:</strong> <a href="11093.php">Arnaud Westenberg: "[OMPI users] Distribute app over open mpi"</a>
<li><strong>In reply to:</strong> <a href="11084.php">Josh Hursey: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
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
