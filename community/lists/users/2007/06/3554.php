<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 27 18:34:17 2007" -->
<!-- isoreceived="20070627223417" -->
<!-- sent="Wed, 27 Jun 2007 17:34:18 -0500" -->
<!-- isosent="20070627223418" -->
<!-- name="Adams, Samuel D Contr AFRL/HEDR" -->
<!-- email="Samuel.Adams_at_[hidden]" -->
<!-- subject="[OMPI users] initial setup" -->
<!-- id="8BF06A36E7AD424197195998D9A0B8E1CA3BA4_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Adams, Samuel D Contr AFRL/HEDR (<em>Samuel.Adams_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-27 18:34:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3555.php">Brian Dobbins: "Re: [OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<li><strong>Previous message:</strong> <a href="3553.php">Jeff Pummill: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3564.php">Jeff Squyres: "Re: [OMPI users] initial setup"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3564.php">Jeff Squyres: "Re: [OMPI users] initial setup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have something wrong with having my LD_LIBRARY_PATH variable path set
<br>
when I am doing a non-interactive login to remote nodes.  These nodes
<br>
are running RHEL5.
<br>
<p>It looks like something like this:
<br>
--------------------------------------------------------------------
<br>
[sam_at_prodnode1 fdtd_0.3]$ time mpiexec --host prodnode3 -np 16 fdtd -t
<br>
./test_files/tissue.txt -r ./test_files/sphere_x0120y0120z0120.raw -v
<br>
Beowulf Computer Cluster (BCC)
<br>
AFRL/HED
<br>
...
<br>
Setting up [gcc production] cluster environment
<br>
fdtd: error while loading shared libraries: libmpi.so.0: cannot open
<br>
shared object file: No such file or directory
<br>
...
<br>
<p>For some reason the LD_LIBRARY_PATH is not being set, but the PATH is:
<br>
----------------------------------------------------------------------
<br>
[sam_at_prodnode1 ~]$ ssh prodnode3 export
<br>
Beowulf Computer Cluster (BCC)
<br>
AFRL/HED
<br>
...
<br>
Setting up [gcc production] cluster environment
<br>
declare -x G_BROKEN_FILENAMES=&quot;1&quot;
<br>
declare -x HOME=&quot;/home/sam&quot;
<br>
declare -x LANG=&quot;en_US.UTF-8&quot;
<br>
declare -x LESSOPEN=&quot;|/usr/bin/lesspipe.sh %s&quot;
<br>
declare -x LOGNAME=&quot;sam&quot;
<br>
declare -x LS_COLORS=&quot;&quot;
<br>
declare -x MAIL=&quot;/var/mail/sam&quot;
<br>
declare -x OLDPWD
<br>
declare -x
<br>
PATH=&quot;/usr/local/profiles/gcc-openmpi/bin/:/usr/kerberos/bin:/usr/local/
<br>
bin:/bin:/usr/bin:/opt/jdk1.5.0_07/bin&quot;
<br>
declare -x PWD=&quot;/home/sam&quot;
<br>
declare -x SHELL=&quot;/bin/bash&quot;
<br>
declare -x SHLVL=&quot;1&quot;
<br>
declare -x SSH_CLIENT=&quot;140.140.207.111 51258 22&quot;
<br>
declare -x SSH_CONNECTION=&quot;140.140.207.111 51258 140.140.207.113 22&quot;
<br>
declare -x USER=&quot;sam&quot;
<br>
[sam_at_prodnode1 ~]$
<br>
<p>I have the following in both my .bashrc and .profile in $HOME:
<br>
--------------------------------------------------------------------
<br>
if [ `hostname | grep &quot;prod&quot;` ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;Setting up [gcc production] cluster environment&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PATH=/usr/local/profiles/gcc-openmpi/bin/:$PATH
<br>
&nbsp;
<br>
LD_LIBRARY_PATH=/usr/local/profiles/gcc-openmpi/lib/:$LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MANPATH=/usr/local/profiles/gcc-openmpi/man:$MANPATH
<br>
fi
<br>
<p>Things will work if I use:
<br>
$ mpirun --prefix /usr/local/profiles/gcc-openmpi ...
<br>
<p>Sam Adams
<br>
General Dynamics Information Technology
<br>
Phone: 210.536.5945
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3555.php">Brian Dobbins: "Re: [OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<li><strong>Previous message:</strong> <a href="3553.php">Jeff Pummill: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3564.php">Jeff Squyres: "Re: [OMPI users] initial setup"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3564.php">Jeff Squyres: "Re: [OMPI users] initial setup"</a>
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
