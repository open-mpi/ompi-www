<?
$subject_val = "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 12:50:09 2012" -->
<!-- isoreceived="20120302175009" -->
<!-- sent="Fri, 2 Mar 2012 12:50:04 -0500" -->
<!-- isosent="20120302175004" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes" -->
<!-- id="C7022BEF-1342-4914-9292-D2D7088798F9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F50977C.26880.208EC2AD_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 12:50:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18669.php">Paul Kapinos: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<li><strong>Previous message:</strong> <a href="18667.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18662.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18673.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18673.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 2, 2012, at 9:48 AM, Yiguang Yan wrote:
<br>
<p><span class="quotelev1">&gt; (All with the same test script test.bash I post in my previous emails, so run with app file fed to mpirun command.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1) If I put the --prefix in the app file, on each line of it, it works fine as Jeff said.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (2) Since in the manual, it is said that the full path of mpirun is the same as setting &quot;--prefix&quot;. However, with app file, 
</span><br>
<span class="quotelev1">&gt; this is not the case. Without &quot;--prefix&quot; on each line of the app file, the full path of mpirun does not work.
</span><br>
<p>Ralph and I just had a phone conversation about this.  We consider it a bug -- you shouldn't need to put --prefix in the app file.  Meaning: --prefix is currently being ignored if you use an app file (and therefore you have to put --prefix in the app file).  We're going to fix that.
<br>
<p><span class="quotelev1">&gt; (3) With &quot;--prefix $adinahome&quot; set on each line of the app file, it is exclusively put, on each node, the 
</span><br>
<span class="quotelev1">&gt; $adinahome/bin into the PATH, and $adinahome/lib into the LD_LIBRARY_PATH(not the $adinahome/lib64 as said 
</span><br>
<span class="quotelev1">&gt; in mpirun manual(v1.4.x)).
</span><br>
<p>Correct.
<br>
<p><span class="quotelev1">&gt; The envars $PATH and $LD_LIBARARY_PATH set in test.bash script only affect the 
</span><br>
<span class="quotelev1">&gt; envars on the submitting node(gulftown in my case). No $PATH or $LD_LIBRARY_PATH is passed to slave nodes 
</span><br>
<span class="quotelev1">&gt; even if I use &quot;-x PATH -x LD_LIBRARY_PATH&quot;, either fed to mpirun or put on each line of the app file. I am not sure 
</span><br>
<span class="quotelev1">&gt; if this is intended, since &quot;--prefix&quot; overwrite the effect of &quot;-x&quot; option, this is different from what I see from the mpirun 
</span><br>
<span class="quotelev1">&gt; man page.
</span><br>
<p>Hmm.  Let's do a simple test here...
<br>
<p>-----
<br>
[9:38] svbu-mpi:~ % cat foo
<br>
#!/bin/bash
<br>
<p>echo test_env_var: $test_env_var
<br>
[9:38] svbu-mpi:~ % ./foo
<br>
test_env_var:
<br>
[9:38] svbu-mpi:~ % mpirun --host svbu-mpi001,svbu-mpi002 ~/foo
<br>
test_env_var:
<br>
test_env_var:
<br>
[9:38] svbu-mpi:~ % setenv test_env_var THIS-IS-TEST-ENV-VAR
<br>
[9:39] svbu-mpi:~ % ./foo
<br>
test_env_var: THIS-IS-TEST-ENV-VAR
<br>
[9:39] svbu-mpi:~ % mpirun --host svbu-mpi001,svbu-mpi002 ~/foo
<br>
test_env_var:
<br>
test_env_var:
<br>
[9:39] svbu-mpi:~ % mpirun --host svbu-mpi001,svbu-mpi002 -x test_env_var ~/foo
<br>
test_env_var: THIS-IS-TEST-ENV-VAR
<br>
test_env_var: THIS-IS-TEST-ENV-VAR
<br>
[9:39] svbu-mpi:~ % 
<br>
-----
<br>
<p>So that appears to work.  Let's try with PATH.
<br>
<p>-----
<br>
[9:41] svbu-mpi:~ % cat foo
<br>
#!/bin/bash -f
<br>
<p>echo PATH: $PATH
<br>
[9:41] svbu-mpi:~ % ./foo
<br>
PATH: /home/jsquyres/bogus/bin:/users/jsquyres/local/bin:/home/jsquyres/bogus/bin:/users/jsquyres/local/bin:/var/opt/intel/composerxe-2011.1.107/bin:/opt/autotools/ac268-am1113-lt242/bin:/cm/shared/apps/valgrind/3.7.0/bin:/cm/shared/apps/mercurial/2.0.2/bin:/cm/shared/apps/gcc/4.4.6/bin:/usr/lib64/qt-3.3/bin:/usr/local/bin:/bin:/usr/bin:/sbin:/usr/sbin:/cm/shared/apps/slurm/2.2.4/bin:/cm/shared/apps/slurm/2.2.4/sbin:/cm/shared/apps/proxy/bin:/cm/shared/apps/subversion/1.7.2/bin:/sbin:/usr/sbin
<br>
<p># That's ok. Now let's try with mpirun.
<br>
<p>[9:41] svbu-mpi:~ % mpirun --host svbu-mpi001,svbu-mpi002 ~/foo
<br>
PATH: /home/jsquyres/bogus/bin:/home/jsquyres/bogus/bin:/home/jsquyres/bogus/bin:/users/jsquyres/local/bin:/var/opt/intel/composerxe-2011.1.107/bin:/opt/autotools/ac268-am1113-lt242/bin:/cm/shared/apps/valgrind/3.7.0/bin:/cm/shared/apps/mercurial/2.0.2/bin:/cm/shared/apps/gcc/4.4.6/bin:/usr/lib64/qt-3.3/bin:/usr/local/bin:/bin:/usr/bin:/sbin:/usr/sbin:/cm/shared/apps/slurm/2.2.4/bin:/cm/shared/apps/slurm/2.2.4/sbin:/cm/shared/apps/proxy/bin:/cm/shared/apps/subversion/1.7.2/bin
<br>
PATH: /home/jsquyres/bogus/bin:/home/jsquyres/bogus/bin:/home/jsquyres/bogus/bin:/users/jsquyres/local/bin:/var/opt/intel/composerxe-2011.1.107/bin:/opt/autotools/ac268-am1113-lt242/bin:/cm/shared/apps/valgrind/3.7.0/bin:/cm/shared/apps/mercurial/2.0.2/bin:/cm/shared/apps/gcc/4.4.6/bin:/usr/lib64/qt-3.3/bin:/usr/local/bin:/bin:/usr/bin:/sbin:/usr/sbin:/cm/shared/apps/slurm/2.2.4/bin:/cm/shared/apps/slurm/2.2.4/sbin:/cm/shared/apps/proxy/bin:/cm/shared/apps/subversion/1.7.2/bin
<br>
<p># These look ok (my remote path is a bit longer than my local path)
<br>
# Now let's add a bogus entry the local path
<br>
<p>[9:41] svbu-mpi:~ % set path = ($path /this/is/a/fake/path)
<br>
[9:41] svbu-mpi:~ % ./foo
<br>
PATH: /home/jsquyres/bogus/bin:/users/jsquyres/local/bin:/home/jsquyres/bogus/bin:/users/jsquyres/local/bin:/var/opt/intel/composerxe-2011.1.107/bin:/opt/autotools/ac268-am1113-lt242/bin:/cm/shared/apps/valgrind/3.7.0/bin:/cm/shared/apps/mercurial/2.0.2/bin:/cm/shared/apps/gcc/4.4.6/bin:/usr/lib64/qt-3.3/bin:/usr/local/bin:/bin:/usr/bin:/sbin:/usr/sbin:/cm/shared/apps/slurm/2.2.4/bin:/cm/shared/apps/slurm/2.2.4/sbin:/cm/shared/apps/proxy/bin:/cm/shared/apps/subversion/1.7.2/bin:/sbin:/usr/sbin:/this/is/a/fake/path
<br>
<p># Good; the bogus entry is there.  Now try mpirun
<br>
<p>[9:41] svbu-mpi:~ % mpirun --host svbu-mpi001,svbu-mpi002 ~/foo
<br>
PATH: /home/jsquyres/bogus/bin:/home/jsquyres/bogus/bin:/home/jsquyres/bogus/bin:/users/jsquyres/local/bin:/var/opt/intel/composerxe-2011.1.107/bin:/opt/autotools/ac268-am1113-lt242/bin:/cm/shared/apps/valgrind/3.7.0/bin:/cm/shared/apps/mercurial/2.0.2/bin:/cm/shared/apps/gcc/4.4.6/bin:/usr/lib64/qt-3.3/bin:/usr/local/bin:/bin:/usr/bin:/sbin:/usr/sbin:/cm/shared/apps/slurm/2.2.4/bin:/cm/shared/apps/slurm/2.2.4/sbin:/cm/shared/apps/proxy/bin:/cm/shared/apps/subversion/1.7.2/bin
<br>
PATH: /home/jsquyres/bogus/bin:/home/jsquyres/bogus/bin:/home/jsquyres/bogus/bin:/users/jsquyres/local/bin:/var/opt/intel/composerxe-2011.1.107/bin:/opt/autotools/ac268-am1113-lt242/bin:/cm/shared/apps/valgrind/3.7.0/bin:/cm/shared/apps/mercurial/2.0.2/bin:/cm/shared/apps/gcc/4.4.6/bin:/usr/lib64/qt-3.3/bin:/usr/local/bin:/bin:/usr/bin:/sbin:/usr/sbin:/cm/shared/apps/slurm/2.2.4/bin:/cm/shared/apps/slurm/2.2.4/sbin:/cm/shared/apps/proxy/bin:/cm/shared/apps/subversion/1.7.2/bin
<br>
<p># Good -- it's not there.  Now -x PATH
<br>
<p>[9:41] svbu-mpi:~ % mpirun --host svbu-mpi001,svbu-mpi002 -x PATH ~/foo
<br>
PATH: /home/jsquyres/bogus/bin:/home/jsquyres/bogus/bin:/users/jsquyres/local/bin:/home/jsquyres/bogus/bin:/users/jsquyres/local/bin:/var/opt/intel/composerxe-2011.1.107/bin:/opt/autotools/ac268-am1113-lt242/bin:/cm/shared/apps/valgrind/3.7.0/bin:/cm/shared/apps/mercurial/2.0.2/bin:/cm/shared/apps/gcc/4.4.6/bin:/usr/lib64/qt-3.3/bin:/usr/local/bin:/bin:/usr/bin:/sbin:/usr/sbin:/cm/shared/apps/slurm/2.2.4/bin:/cm/shared/apps/slurm/2.2.4/sbin:/cm/shared/apps/proxy/bin:/cm/shared/apps/subversion/1.7.2/bin:/sbin:/usr/sbin:/this/is/a/fake/path
<br>
PATH: /home/jsquyres/bogus/bin:/home/jsquyres/bogus/bin:/users/jsquyres/local/bin:/home/jsquyres/bogus/bin:/users/jsquyres/local/bin:/var/opt/intel/composerxe-2011.1.107/bin:/opt/autotools/ac268-am1113-lt242/bin:/cm/shared/apps/valgrind/3.7.0/bin:/cm/shared/apps/mercurial/2.0.2/bin:/cm/shared/apps/gcc/4.4.6/bin:/usr/lib64/qt-3.3/bin:/usr/local/bin:/bin:/usr/bin:/sbin:/usr/sbin:/cm/shared/apps/slurm/2.2.4/bin:/cm/shared/apps/slurm/2.2.4/sbin:/cm/shared/apps/proxy/bin:/cm/shared/apps/subversion/1.7.2/bin:/sbin:/usr/sbin:/this/is/a/fake/path
<br>
<p># Good -- the entry is now there on the remote nodes.
<br>
# Now let's try with --prefix and -x PATH
<br>
<p>[9:44] svbu-mpi:~ % mpirun --prefix /home/jsquyres/bogus --host svbu-mpi001,svbu-mpi002 -x PATH ~/foo
<br>
PATH: /home/jsquyres/bogus/bin:/home/jsquyres/bogus/bin:/users/jsquyres/local/bin:/home/jsquyres/bogus/bin:/users/jsquyres/local/bin:/var/opt/intel/composerxe-2011.1.107/bin:/opt/autotools/ac268-am1113-lt242/bin:/cm/shared/apps/valgrind/3.7.0/bin:/cm/shared/apps/mercurial/2.0.2/bin:/cm/shared/apps/gcc/4.4.6/bin:/usr/lib64/qt-3.3/bin:/usr/local/bin:/bin:/usr/bin:/sbin:/usr/sbin:/cm/shared/apps/slurm/2.2.4/bin:/cm/shared/apps/slurm/2.2.4/sbin:/cm/shared/apps/proxy/bin:/cm/shared/apps/subversion/1.7.2/bin:/sbin:/usr/sbin:/this/is/a/fake/path
<br>
PATH: /home/jsquyres/bogus/bin:/home/jsquyres/bogus/bin:/users/jsquyres/local/bin:/home/jsquyres/bogus/bin:/users/jsquyres/local/bin:/var/opt/intel/composerxe-2011.1.107/bin:/opt/autotools/ac268-am1113-lt242/bin:/cm/shared/apps/valgrind/3.7.0/bin:/cm/shared/apps/mercurial/2.0.2/bin:/cm/shared/apps/gcc/4.4.6/bin:/usr/lib64/qt-3.3/bin:/usr/local/bin:/bin:/usr/bin:/sbin:/usr/sbin:/cm/shared/apps/slurm/2.2.4/bin:/cm/shared/apps/slurm/2.2.4/sbin:/cm/shared/apps/proxy/bin:/cm/shared/apps/subversion/1.7.2/bin:/sbin:/usr/sbin:/this/is/a/fake/path
<br>
[9:45] svbu-mpi:~ % 
<br>
-----
<br>
<p>So it seems to be working for me.  Can you do a few manual tests like this and see if there's some combination that's not working properly for you?
<br>
<p><span class="quotelev1">&gt; I have another question about the btl used for communication. I noticed that rsh is using the tcp for connection, I 
</span><br>
<span class="quotelev1">&gt; understand that tcp may be used for initial connection, but how can I know that openib(infiniband) btl is used for my 
</span><br>
<span class="quotelev1">&gt; data communication? Any explicit way?
</span><br>
<p><p>At the moment, there are implicit ways.
<br>
<p>TCP is used for MPI bootstrapping.  But then what transport is used for MPI traffic is set by the &quot;btl&quot; MCA parameter (byte transfer layer), as Ralph said.  You can *force* the OpenFabrics BTL to be used with something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl openib,sm,self ...
<br>
<p>The &quot;openib&quot; is the OpenFabrics BTL (OpenFabric used to be called OpenIB, and we're kinda stuck with the plugin name now).  &quot;sm&quot; is shared memory, and &quot;self&quot; is process loopback.  So with this command line, you'll *only* use these 3 BTLs for MPI communication.
<br>
<p>Make sense?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18669.php">Paul Kapinos: "Re: [OMPI users] Hybrid OpenMPI / OpenMP programming"</a>
<li><strong>Previous message:</strong> <a href="18667.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18662.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18673.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18673.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
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
