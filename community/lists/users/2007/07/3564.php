<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul  1 10:52:41 2007" -->
<!-- isoreceived="20070701145241" -->
<!-- sent="Sun, 1 Jul 2007 13:08:58 +0200" -->
<!-- isosent="20070701110858" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] initial setup" -->
<!-- id="A6C28475-9E6C-43A8-B14E-321C58E00C2A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8BF06A36E7AD424197195998D9A0B8E1CA3BA4_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-01 07:08:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3565.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] nfs romio"</a>
<li><strong>Previous message:</strong> <a href="3563.php">Jeff Squyres: "Re: [OMPI users] openmpi on g4 mac with g95 (www.g95.org) in mpif90"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3554.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] initial setup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not a bash user -- but don't you need to export PATH,  
<br>
LD_LIBRARY_PATH, and MANPATH?
<br>
<p>It could be that something else later is exporting PATH (and  
<br>
therefore your changes &quot;take effect&quot;), but nothing exports  
<br>
LD_LIBRARY_PATH (and therefore your changes get lost).
<br>
<p><p>On Jun 28, 2007, at 12:34 AM, Adams, Samuel D Contr AFRL/HEDR wrote:
<br>
<p><span class="quotelev1">&gt; I have something wrong with having my LD_LIBRARY_PATH variable path  
</span><br>
<span class="quotelev1">&gt; set
</span><br>
<span class="quotelev1">&gt; when I am doing a non-interactive login to remote nodes.  These nodes
</span><br>
<span class="quotelev1">&gt; are running RHEL5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like something like this:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [sam_at_prodnode1 fdtd_0.3]$ time mpiexec --host prodnode3 -np 16 fdtd -t
</span><br>
<span class="quotelev1">&gt; ./test_files/tissue.txt -r ./test_files/sphere_x0120y0120z0120.raw -v
</span><br>
<span class="quotelev1">&gt; Beowulf Computer Cluster (BCC)
</span><br>
<span class="quotelev1">&gt; AFRL/HED
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Setting up [gcc production] cluster environment
</span><br>
<span class="quotelev1">&gt; fdtd: error while loading shared libraries: libmpi.so.0: cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For some reason the LD_LIBRARY_PATH is not being set, but the PATH is:
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [sam_at_prodnode1 ~]$ ssh prodnode3 export
</span><br>
<span class="quotelev1">&gt; Beowulf Computer Cluster (BCC)
</span><br>
<span class="quotelev1">&gt; AFRL/HED
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Setting up [gcc production] cluster environment
</span><br>
<span class="quotelev1">&gt; declare -x G_BROKEN_FILENAMES=&quot;1&quot;
</span><br>
<span class="quotelev1">&gt; declare -x HOME=&quot;/home/sam&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LANG=&quot;en_US.UTF-8&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LESSOPEN=&quot;|/usr/bin/lesspipe.sh %s&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LOGNAME=&quot;sam&quot;
</span><br>
<span class="quotelev1">&gt; declare -x LS_COLORS=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; declare -x MAIL=&quot;/var/mail/sam&quot;
</span><br>
<span class="quotelev1">&gt; declare -x OLDPWD
</span><br>
<span class="quotelev1">&gt; declare -x
</span><br>
<span class="quotelev1">&gt; PATH=&quot;/usr/local/profiles/gcc-openmpi/bin/:/usr/kerberos/bin:/usr/ 
</span><br>
<span class="quotelev1">&gt; local/
</span><br>
<span class="quotelev1">&gt; bin:/bin:/usr/bin:/opt/jdk1.5.0_07/bin&quot;
</span><br>
<span class="quotelev1">&gt; declare -x PWD=&quot;/home/sam&quot;
</span><br>
<span class="quotelev1">&gt; declare -x SHELL=&quot;/bin/bash&quot;
</span><br>
<span class="quotelev1">&gt; declare -x SHLVL=&quot;1&quot;
</span><br>
<span class="quotelev1">&gt; declare -x SSH_CLIENT=&quot;140.140.207.111 51258 22&quot;
</span><br>
<span class="quotelev1">&gt; declare -x SSH_CONNECTION=&quot;140.140.207.111 51258 140.140.207.113 22&quot;
</span><br>
<span class="quotelev1">&gt; declare -x USER=&quot;sam&quot;
</span><br>
<span class="quotelev1">&gt; [sam_at_prodnode1 ~]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the following in both my .bashrc and .profile in $HOME:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; if [ `hostname | grep &quot;prod&quot;` ]; then
</span><br>
<span class="quotelev1">&gt;         echo &quot;Setting up [gcc production] cluster environment&quot;
</span><br>
<span class="quotelev1">&gt;         PATH=/usr/local/profiles/gcc-openmpi/bin/:$PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/profiles/gcc-openmpi/lib/:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;         MANPATH=/usr/local/profiles/gcc-openmpi/man:$MANPATH
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Things will work if I use:
</span><br>
<span class="quotelev1">&gt; $ mpirun --prefix /usr/local/profiles/gcc-openmpi ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam Adams
</span><br>
<span class="quotelev1">&gt; General Dynamics Information Technology
</span><br>
<span class="quotelev1">&gt; Phone: 210.536.5945
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3565.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] nfs romio"</a>
<li><strong>Previous message:</strong> <a href="3563.php">Jeff Squyres: "Re: [OMPI users] openmpi on g4 mac with g95 (www.g95.org) in mpif90"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3554.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] initial setup"</a>
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
