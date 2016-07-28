<?
$subject_val = "Re: [OMPI users] mpirun fails on the host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 04:15:38 2009" -->
<!-- isoreceived="20090619081538" -->
<!-- sent="Fri, 19 Jun 2009 10:15:30 +0200" -->
<!-- isosent="20090619081530" -->
<!-- name="Honest Guvnor" -->
<!-- email="honestguvnor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun fails on the host" -->
<!-- id="c3fd201b0906190115p7f92f695n4af702d9d068bff7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0906181812s5af5fbafnb62a471b319e5bb2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun fails on the host<br>
<strong>From:</strong> Honest Guvnor (<em>honestguvnor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 04:15:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9638.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Previous message:</strong> <a href="9636.php">Ralph Castain: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>In reply to:</strong> <a href="9636.php">Ralph Castain: "Re: [OMPI users] mpirun fails on the host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9649.php">Honest Guvnor: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>Reply:</strong> <a href="9649.php">Honest Guvnor: "Re: [OMPI users] mpirun fails on the host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jun 19, 2009 at 3:12 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Add --debug-devel to your cmd line and you'll get a bunch of diagnostic
</span><br>
<span class="quotelev1">&gt; info. Did you configure --enable-debug? If so, then additional debug can be
</span><br>
<span class="quotelev1">&gt; obtained - can let you know how to get it, if necessary.
</span><br>
<p><p>Yes we had run with the -d flag and it was the output from this that
<br>
prompted us to find out how to prevent the use of the external network. I am
<br>
not sure what most of the messages mean but we still get quite a few
<br>
references to hankel.fred.com which the nodes will not be able to access.
<br>
Here is the output (changed external ip numbers and domain):
<br>
<p>[cluster_at_hankel ~]$ mpirun --debug-devel --mca btl tcp,self --mca
<br>
btl_tcp_if_exclude lo,eth0 --mca oob_tcp_if_exclude lo,eth0 -np 1 --host n06
<br>
hostname
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] connect_uni: connection not allowed
<br>
[hankel.fred.com:26997] [0,0,0] setting up session dir with
<br>
[hankel.fred.com:26997] universe default-universe-26997
<br>
[hankel.fred.com:26997] user cluster
<br>
[hankel.fred.com:26997] host hankel.fred.com
<br>
[hankel.fred.com:26997] jobid 0
<br>
[hankel.fred.com:26997] procid 0
<br>
[hankel.fred.com:26997] procdir:
<br>
/tmp/openmpi-sessions-cluster_at_[hidden]_0/default-universe-26997/0/0
<br>
[hankel.fred.com:26997] jobdir:
<br>
/tmp/openmpi-sessions-cluster_at_[hidden]_0/default-universe-26997/0
<br>
[hankel.fred.com:26997] unidir:
<br>
/tmp/openmpi-sessions-cluster_at_[hidden]_0/default-universe-26997
<br>
[hankel.fred.com:26997] top: openmpi-sessions-cluster_at_[hidden]_0
<br>
[hankel.fred.com:26997] tmp: /tmp
<br>
[hankel.fred.com:26997] [0,0,0] contact_file
<br>
/tmp/openmpi-sessions-cluster_at_[hidden]_0
<br>
/default-universe-26997/universe-setup.txt
<br>
[hankel.fred.com:26997] [0,0,0] wrote setup file
<br>
[hankel.fred.com:26997] pls:rsh: local csh: 0, local sh: 1
<br>
[hankel.fred.com:26997] pls:rsh: assuming same remote shell as local shell
<br>
[hankel.fred.com:26997] pls:rsh: remote csh: 0, remote sh: 1
<br>
[hankel.fred.com:26997] pls:rsh: final template argv:
<br>
[hankel.fred.com:26997] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug
<br>
--bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename
<br>
&lt;template&gt; --universe cluster_at_[hidden]:default-universe-26997
<br>
--nsreplica &quot;0.0.0;tcp://192.168.0.99:54116&quot; --gprreplica &quot;0.0.0;tcp://
<br>
192.168.0.99:54116&quot;
<br>
[hankel.fred.com:26997] pls:rsh: launching on node n06
<br>
[hankel.fred.com:26997] pls:rsh: n06 is a REMOTE node
<br>
[hankel.fred.com:26997] pls:rsh: executing: (//usr/bin/ssh) /usr/bin/ssh n06
<br>
&nbsp;PATH=/usr/lib/openmpi/1.2.7-gcc/bin:$PATH ; export PATH ;
<br>
LD_LIBRARY_PATH=/usr/lib/openmpi/1.2.7-gcc/lib:$LD_LIBRARY_PATH ; export
<br>
LD_LIBRARY_PATH ; /usr/lib/openmpi/1.2.7-gcc/bin/orted --debug --bootproxy 1
<br>
--name 0.0.1 --num_procs 2 --vpid_start 0 --nodename n06 --universe
<br>
cluster_at_[hidden]:default-universe-26997 --nsreplica &quot;0.0.0;tcp://
<br>
192.168.0.99:54116&quot; --gprreplica &quot;0.0.0;tcp://192.168.0.99:54116&quot; [HOSTNAME=
<br>
hankel.fred.com TERM=xterm-color SHELL=/bin/bash HISTSIZE=1000
<br>
SSH_CLIENT=130.149.86.77 50506 22 SSH_TTY=/dev/pts/12 USER=cluster
<br>
LD_LIBRARY_PATH=:/usr/lib/openmpi/1.2.7-gcc/lib
<br>
LS_COLORS=no=00:fi=00:di=01;34:ln=01;36:pi=40;33:so=01;35:bd=40;33;01:cd=40;33;01:or=01;05;37;41:mi=01;05;37;41:ex=01;32:*.cmd=01;32:*.exe=01;32:*.com=01;32:*.btm=01;32:*.bat=01;32:*.sh=01;32:*.csh=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.gz=01;31:*.bz2=01;31:*.bz=01;31:*.tz=01;31:*.rpm=01;31:*.cpio=01;31:*.jpg=01;35:*.gif=01;35:*.bmp=01;35:*.xbm=01;35:*.xpm=01;35:*.png=01;35:*.tif=01;35:
<br>
MAIL=/var/spool/mail/cluster
<br>
PATH=/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/lib/openmpi/1.2.7-gcc/bin:/home/cluster/bin
<br>
INPUTRC=/etc/inputrc PWD=/home/cluster LANG=en_US.UTF-8
<br>
SSH_ASKPASS=/usr/libexec/openssh/gnome-ssh-askpass SHLVL=1
<br>
HOME=/home/cluster LOGNAME=cluster CVS_RSH=ssh
<br>
SSH_CONNECTION=222.222.222.222 50506 111.111.111.111 22
<br>
LESSOPEN=|/usr/bin/lesspipe.sh %s G_BROKEN_FILENAMES=1
<br>
_=/usr/lib/openmpi/1.2.7-gcc/bin/mpirun OMPI_MCA_orte_debug=1
<br>
OMPI_MCA_btl=tcp,self OMPI_MCA_btl_tcp_if_exclude=lo,eth0
<br>
OMPI_MCA_oob_tcp_if_exclude=lo,eth0 OMPI_MCA_seed=0]
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9637/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9638.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Previous message:</strong> <a href="9636.php">Ralph Castain: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>In reply to:</strong> <a href="9636.php">Ralph Castain: "Re: [OMPI users] mpirun fails on the host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9649.php">Honest Guvnor: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>Reply:</strong> <a href="9649.php">Honest Guvnor: "Re: [OMPI users] mpirun fails on the host"</a>
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
