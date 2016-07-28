<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 20:13:09 2007" -->
<!-- isoreceived="20070612001309" -->
<!-- sent="Tue, 12 Jun 2007 01:13:04 +0100" -->
<!-- isosent="20070612001304" -->
<!-- name="Jonathan Underwood" -->
<!-- email="jonathan.underwood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP connection errors" -->
<!-- id="645d17210706111713s353c119cl7487c440b618c320_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070611225032.GY13561_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Jonathan Underwood (<em>jonathan.underwood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 20:13:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3467.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3465.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>In reply to:</strong> <a href="3464.php">Adrian Knoth: "Re: [OMPI users] TCP connection errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3468.php">George Bosilca: "Re: [OMPI users] TCP connection errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/06/07, Adrian Knoth &lt;adi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's the exact problem? compute-node -&gt; frontend? I don't think you
</span><br>
<span class="quotelev1">&gt; have two processes on the frontend node, and even if you do, they should
</span><br>
<span class="quotelev1">&gt; use shared memory.
</span><br>
<p>I stopped there being more than a single process on the frontend node
<br>
- this had no effect on the problem. The problem is that the processes
<br>
seem unable to communicate data to each other, although I can ssh
<br>
between machines with no problem ( I have set up passphraseless keys).
<br>
<p><p><span class="quotelev1">&gt; Use tcpdump and/or recompile with debug enabled. In addition, set
</span><br>
<span class="quotelev1">&gt; WANT_PEER_DUMP in ompi/mca/btl/tcp/btl_tcp_endpoint.c to 1 (line 120)
</span><br>
<span class="quotelev1">&gt; and recompile, thus giving you more debug output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depending on your OMPI version, you can also add
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi_preconnect_all=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to your ~/.openmpi/mca-params.conf, by this establishing all connections
</span><br>
<span class="quotelev1">&gt; during MPI_Init().
</span><br>
<p>I can't use tcpdump as i don't have root access, but I have made the
<br>
change to btl_tcp_endpoint.c that you mention, rebuilt (make
<br>
distclean... ./configure --enable-debug) OpenMPI, rebuilt the
<br>
application against the new version of openMPI and re-ran the program.
<br>
This is the output I see (with -np 3, and only 1 slot on the
<br>
frontend):
<br>
<p>[steinbeck.phys.ucl.ac.uk:08475] [0,0,0] setting up session dir with
<br>
[steinbeck.phys.ucl.ac.uk:08475]        universe default-universe-8475
<br>
[steinbeck.phys.ucl.ac.uk:08475]        user jgu
<br>
[steinbeck.phys.ucl.ac.uk:08475]        host steinbeck.phys.ucl.ac.uk
<br>
[steinbeck.phys.ucl.ac.uk:08475]        jobid 0
<br>
[steinbeck.phys.ucl.ac.uk:08475]        procid 0
<br>
[steinbeck.phys.ucl.ac.uk:08475] procdir:
<br>
/tmp/openmpi-sessions-jgu_at_[hidden]_0/default-universe-8475/0/0
<br>
[steinbeck.phys.ucl.ac.uk:08475] jobdir:
<br>
/tmp/openmpi-sessions-jgu_at_[hidden]_0/default-universe-8475/0
<br>
[steinbeck.phys.ucl.ac.uk:08475] unidir:
<br>
/tmp/openmpi-sessions-jgu_at_[hidden]_0/default-universe-8475
<br>
[steinbeck.phys.ucl.ac.uk:08475] top:
<br>
openmpi-sessions-jgu_at_[hidden]_0
<br>
[steinbeck.phys.ucl.ac.uk:08475] tmp: /tmp
<br>
[steinbeck.phys.ucl.ac.uk:08475] [0,0,0] contact_file
<br>
/tmp/openmpi-sessions-jgu_at_[hidden]_0/default-universe-8475/universe-s
<br>
etup.txt
<br>
[steinbeck.phys.ucl.ac.uk:08475] [0,0,0] wrote setup file
<br>
[steinbeck.phys.ucl.ac.uk:08475] pls:rsh: local csh: 0, local sh: 1
<br>
[steinbeck.phys.ucl.ac.uk:08475] pls:rsh: assuming same remote shell
<br>
as local shell
<br>
[steinbeck.phys.ucl.ac.uk:08475] pls:rsh: remote csh: 0, remote sh: 1
<br>
[steinbeck.phys.ucl.ac.uk:08475] pls:rsh: final template argv:
<br>
[steinbeck.phys.ucl.ac.uk:08475] pls:rsh:     /usr/bin/ssh &lt;template&gt;
<br>
orted --debug --debug-daemons --bootproxy 1 --name &lt;template&gt; --num_p
<br>
rocs 3 --vpid_start 0 --nodename &lt;template&gt; --universe
<br>
jgu_at_[hidden]:default-universe-8475 --nsreplica
<br>
&quot;0.0.0;tcp://128.40.5
<br>
.39:37256;tcp://192.168.1.1:37256&quot; --gprreplica
<br>
&quot;0.0.0;tcp://128.40.5.39:37256;tcp://192.168.1.1:37256&quot;
<br>
[steinbeck.phys.ucl.ac.uk:08475] pls:rsh: launching on node frontend
<br>
[steinbeck.phys.ucl.ac.uk:08475] pls:rsh: frontend is a LOCAL node
<br>
[steinbeck.phys.ucl.ac.uk:08475] pls:rsh: changing to directory /homes/jgu
<br>
[steinbeck.phys.ucl.ac.uk:08475] pls:rsh: executing:
<br>
(/cluster/data/jgu/bin/orted) orted --debug --debug-daemons
<br>
--bootproxy 1 --name 0.0.1
<br>
&nbsp;--num_procs 3 --vpid_start 0 --nodename frontend --universe
<br>
jgu_at_[hidden]:default-universe-8475 --nsreplica
<br>
&quot;0.0.0;tcp://12
<br>
8.40.5.39:37256;tcp://192.168.1.1:37256&quot; --gprreplica
<br>
&quot;0.0.0;tcp://128.40.5.39:37256;tcp://192.168.1.1:37256&quot; --set-sid
<br>
[BIBINPUTS=.::/amp/
<br>
tex// NNTPSERVER=nntp-server.ucl.ac.uk SSH_AGENT_PID=8473
<br>
HOSTNAME=steinbeck.phys.ucl.ac.uk BSTINPUTS=.::/amp/tex// TERM=screen
<br>
SHELL=/bin/
<br>
bash HISTSIZE=1000 TMPDIR=/tmp SSH_CLIENT=128.40.5.249 55312 22
<br>
QTDIR=/usr/lib64/qt-3.3 SSH_TTY=/dev/pts/0 USER=jgu
<br>
LD_LIBRARY_PATH=:/clust
<br>
er/data/jgu/lib:/cluster/data/jgu/lib
<br>
LS_COLORS=no=00:fi=00:di=01;34:ln=01;36:pi=40;33:so=01;35:bd=40;33;01:cd=40;33;01:or=01;05;37;41:mi=0
<br>
1;05;37;41:ex=01;32:*.cmd=01;32:*.exe=01;32:*.com=01;32:*.btm=01;32:*.bat=01;32:*.sh=01;32:*.csh=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:
<br>
*.taz=01;31:*.lzh=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.gz=01;31:*.bz2=01;31:*.bz=01;31:*.tz=01;31:*.rpm=01;31:*.cpio=01;31:*.jpg=01;35:*
<br>
.gif=01;35:*.bmp=01;35:*.xbm=01;35:*.xpm=01;35:*.png=01;35:*.tif=01;35:
<br>
SSH_AUTH_SOCK=/tmp/ssh-KjHUoC8472/agent.8472 TERMCAP=SC|screen|VT 1
<br>
00/ANSI X3.64 virtual terminal:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:DO=\E[%dB:LE=\E[%dD:RI=\E[%dC:UP=\E[%dA:bs:bt=\E[Z:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:cd=\E[J:ce=\E[K:cl=\E[H\E[J:cm=\E[%i%d;%dH:ct=\E[3g:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:do=^J:nd=\E[C:pt:rc=\E8:rs=\Ec:sc=\E7:st=\EH:up=\EM:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:le=^H:bl=^G:cr=^M:it#8:ho=\E[H:nw=\EE:ta=^I:is=\E)0:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:li#24:co#80:am:xn:xv:LP:sr=\EM:al=\E[L:AL=\E[%dL:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:cs=\E[%i%d;%dr:dl=\E[M:DL=\E[%dM:dc=\E[P:DC=\E[%dP:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:im=\E[4h:ei=\E[4l:mi:IC=\E[%d@:ks=\E[?1h\E=:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:ke=\E[?1l\E&gt;:vi=\E[?25l:ve=\E[34h\E[?25h:vs=\E[34l:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:ti=\E[?1049h:te=\E[?1049l:us=\E[4m:ue=\E[24m:so=\E[3m:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:se=\E[23m:mb=\E[5m:md=\E[1m:mr=\E[7m:me=\E[m:ms:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:Co#8:pa#64:AF=\E[3%dm:AB=\E[4%dm:op=\E[39;49m:AX:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:vb=\Eg:G0:as=\E(0:ae=\E(B:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:ac=\140\140aaffggjjkkllmmnnooppqqrrssttuuvvwwxxyyzz{{||}}~~..--++,,hhII00:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:po=\E[5i:pf=\E[4i:Z0=\E[?3h:Z1=\E[?3l:k0=\E[10~:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:k1=\EOP:k2=\EOQ:k3=\EOR:k4=\EOS:k5=\E[15~:k6=\E[17~:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:k7=\E[18~:k8=\E[19~:k9=\E[20~:k;=\E[21~:F1=\E[23~:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:F2=\E[24~:F3=\EO2P:F4=\EO2Q:F5=\EO2R:F6=\EO2S:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:F7=\E[15;2~:F8=\E[17;2~:F9=\E[18;2~:FA=\E[19;2~:kb=^H:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:K2=\EOE:kB=\E[Z:*4=\E[3;2~:*7=\E[1;2F:#2=\E[1;2H:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:#3=\E[2;2~:#4=\E[1;2D:%c=\E[6;2~:%e=\E[5;2~:%i=\E[1;2C:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:kh=\E[1~:@1=\E[1~:kH=\E[4~:@7=\E[4~:kN=\E[6~:kP=\E[5~:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:kI=\E[2~:kD=\E[3~:ku=\EOA:kd=\EOB:kr=\EOC:kl=\EOD:km:
<br>
KDEDIR=/usr MOZ_PLUGIN_PATH=/usr/local/plugins
<br>
MAIL=/var/spool/mail/jgu PATH
<br>
=/usr/kerberos/bin:/usr/local/bin64:/usr/local/bin:/bin:/usr/bin:/usr/X11R6/bin:.:/cluster/data/jgu/bin:/cluster/data/jgu/bin
<br>
STY=1936.pts-
<br>
0.steinbeck INPUTRC=/etc/inputrc
<br>
PWD=/cluster/data/jgu/wrk/ethene_hhg_align LANG=en_GB.UTF-8
<br>
LM_LICENSE_FILE=/homes/jgu/licenses:2600_at_hadry
<br>
a.phys.ucl.ac.uk:27000_at_[hidden]:1700_at_[hidden]
<br>
SSH_ASKPASS=/usr/libexec/openssh/gnome-ssh-askpass TEXINPUTS=
<br>
.::/amp/tex/styles// SHLVL=3 HOME=/homes/jgu LOGNAME=jgu WINDOW=0
<br>
SSH_CONNECTION=128.40.5.249 55312 128.40.5.39 22
<br>
LESSOPEN=|/usr/bin/lessp
<br>
ipe.sh %s PROMPT_COMMAND=echo -ne
<br>
&quot;\033_${USER}@${HOSTNAME%%.*}:${PWD/#$HOME/~}\033\\&quot; GLOBAL=skip
<br>
G_BROKEN_FILENAMES=1 NAG_KUSARI_FILE=had
<br>
rya.phys.ucl.ac.uk:7733 _=/cluster/data/jgu/bin/mpirun
<br>
OMPI_MCA_rds_hostfile_path=/cluster/data/jgu/etc/hostfile
<br>
OMPI_MCA_orte_debug=1 OMPI
<br>
_MCA_orte_debug_daemons=1 OMPI_MCA_seed=0]
<br>
[steinbeck.phys.ucl.ac.uk:08475] pls:rsh: launching on node node0
<br>
[steinbeck.phys.ucl.ac.uk:08475] pls:rsh: node0 is a REMOTE node
<br>
[steinbeck.phys.ucl.ac.uk:08475] pls:rsh: executing: (//usr/bin/ssh)
<br>
/usr/bin/ssh node0 orted --debug --debug-daemons --bootproxy 1 --name
<br>
0.0.2 --num_procs 3 --vpid_start 0 --nodename node0 --universe
<br>
jgu_at_[hidden]:default-universe-8475 --nsreplica
<br>
&quot;0.0.0;tcp://
<br>
128.40.5.39:37256;tcp://192.168.1.1:37256&quot; --gprreplica
<br>
&quot;0.0.0;tcp://128.40.5.39:37256;tcp://192.168.1.1:37256&quot;
<br>
[BIBINPUTS=.::/amp/tex// NN
<br>
TPSERVER=nntp-server.ucl.ac.uk SSH_AGENT_PID=8473
<br>
HOSTNAME=steinbeck.phys.ucl.ac.uk BSTINPUTS=.::/amp/tex// TERM=screen
<br>
SHELL=/bin/bash HIS
<br>
TSIZE=1000 TMPDIR=/tmp SSH_CLIENT=128.40.5.249 55312 22
<br>
QTDIR=/usr/lib64/qt-3.3 SSH_TTY=/dev/pts/0 USER=jgu
<br>
LD_LIBRARY_PATH=:/cluster/data/
<br>
jgu/lib:/cluster/data/jgu/lib
<br>
LS_COLORS=no=00:fi=00:di=01;34:ln=01;36:pi=40;33:so=01;35:bd=40;33;01:cd=40;33;01:or=01;05;37;41:mi=01;05;37;
<br>
41:ex=01;32:*.cmd=01;32:*.exe=01;32:*.com=01;32:*.btm=01;32:*.bat=01;32:*.sh=01;32:*.csh=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01
<br>
;31:*.lzh=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.gz=01;31:*.bz2=01;31:*.bz=01;31:*.tz=01;31:*.rpm=01;31:*.cpio=01;31:*.jpg=01;35:*.gif=01;
<br>
35:*.bmp=01;35:*.xbm=01;35:*.xpm=01;35:*.png=01;35:*.tif=01;35:
<br>
SSH_AUTH_SOCK=/tmp/ssh-KjHUoC8472/agent.8472 TERMCAP=SC|screen|VT
<br>
100/ANSI
<br>
X3.64 virtual terminal:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:DO=\E[%dB:LE=\E[%dD:RI=\E[%dC:UP=\E[%dA:bs:bt=\E[Z:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:cd=\E[J:ce=\E[K:cl=\E[H\E[J:cm=\E[%i%d;%dH:ct=\E[3g:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:do=^J:nd=\E[C:pt:rc=\E8:rs=\Ec:sc=\E7:st=\EH:up=\EM:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:le=^H:bl=^G:cr=^M:it#8:ho=\E[H:nw=\EE:ta=^I:is=\E)0:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:li#24:co#80:am:xn:xv:LP:sr=\EM:al=\E[L:AL=\E[%dL:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:cs=\E[%i%d;%dr:dl=\E[M:DL=\E[%dM:dc=\E[P:DC=\E[%dP:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:im=\E[4h:ei=\E[4l:mi:IC=\E[%d@:ks=\E[?1h\E=:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:ke=\E[?1l\E&gt;:vi=\E[?25l:ve=\E[34h\E[?25h:vs=\E[34l:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:ti=\E[?1049h:te=\E[?1049l:us=\E[4m:ue=\E[24m:so=\E[3m:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:se=\E[23m:mb=\E[5m:md=\E[1m:mr=\E[7m:me=\E[m:ms:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:Co#8:pa#64:AF=\E[3%dm:AB=\E[4%dm:op=\E[39;49m:AX:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:vb=\Eg:G0:as=\E(0:ae=\E(B:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:ac=\140\140aaffggjjkkllmmnnooppqqrrssttuuvvwwxxyyzz{{||}}~~..--++,,hhII00:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:po=\E[5i:pf=\E[4i:Z0=\E[?3h:Z1=\E[?3l:k0=\E[10~:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:k1=\EOP:k2=\EOQ:k3=\EOR:k4=\EOS:k5=\E[15~:k6=\E[17~:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:k7=\E[18~:k8=\E[19~:k9=\E[20~:k;=\E[21~:F1=\E[23~:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:F2=\E[24~:F3=\EO2P:F4=\EO2Q:F5=\EO2R:F6=\EO2S:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:F7=\E[15;2~:F8=\E[17;2~:F9=\E[18;2~:FA=\E[19;2~:kb=^H:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:K2=\EOE:kB=\E[Z:*4=\E[3;2~:*7=\E[1;2F:#2=\E[1;2H:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:#3=\E[2;2~:#4=\E[1;2D:%c=\E[6;2~:%e=\E[5;2~:%i=\E[1;2C:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:kh=\E[1~:@1=\E[1~:kH=\E[4~:@7=\E[4~:kN=\E[6~:kP=\E[5~:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:kI=\E[2~:kD=\E[3~:ku=\EOA:kd=\EOB:kr=\EOC:kl=\EOD:km:
<br>
KDEDIR=/usr MOZ_PLUGIN_PATH=/usr/local/plugins
<br>
MAIL=/var/spool/mail/jgu PATH
<br>
=/usr/kerberos/bin:/usr/local/bin64:/usr/local/bin:/bin:/usr/bin:/usr/X11R6/bin:.:/cluster/data/jgu/bin:/cluster/data/jgu/bin
<br>
STY=1936.pts-
<br>
0.steinbeck INPUTRC=/etc/inputrc
<br>
PWD=/cluster/data/jgu/wrk/ethene_hhg_align LANG=en_GB.UTF-8
<br>
LM_LICENSE_FILE=/homes/jgu/licenses:2600_at_hadry
<br>
a.phys.ucl.ac.uk:27000_at_[hidden]:1700_at_[hidden]
<br>
SSH_ASKPASS=/usr/libexec/openssh/gnome-ssh-askpass TEXINPUTS=
<br>
.::/amp/tex/styles// SHLVL=3 HOME=/homes/jgu LOGNAME=jgu WINDOW=0
<br>
SSH_CONNECTION=128.40.5.249 55312 128.40.5.39 22
<br>
LESSOPEN=|/usr/bin/lessp
<br>
ipe.sh %s PROMPT_COMMAND=echo -ne
<br>
&quot;\033_${USER}@${HOSTNAME%%.*}:${PWD/#$HOME/~}\033\\&quot; GLOBAL=skip
<br>
G_BROKEN_FILENAMES=1 NAG_KUSARI_FILE=had
<br>
rya.phys.ucl.ac.uk:7733 _=/cluster/data/jgu/bin/mpirun
<br>
OMPI_MCA_rds_hostfile_path=/cluster/data/jgu/etc/hostfile
<br>
OMPI_MCA_orte_debug=1 OMPI
<br>
_MCA_orte_debug_daemons=1 OMPI_MCA_seed=0]
<br>
[steinbeck.phys.ucl.ac.uk:08476] [0,0,1] setting up session dir with
<br>
[steinbeck.phys.ucl.ac.uk:08476]        universe default-universe-8475
<br>
[steinbeck.phys.ucl.ac.uk:08476]        user jgu
<br>
[steinbeck.phys.ucl.ac.uk:08476]        host frontend
<br>
[steinbeck.phys.ucl.ac.uk:08476]        jobid 0
<br>
[steinbeck.phys.ucl.ac.uk:08476]        procid 1
<br>
[steinbeck.phys.ucl.ac.uk:08476] procdir:
<br>
/tmp/openmpi-sessions-jgu_at_frontend_0/default-universe-8475/0/1
<br>
[steinbeck.phys.ucl.ac.uk:08476] jobdir:
<br>
/tmp/openmpi-sessions-jgu_at_frontend_0/default-universe-8475/0
<br>
[steinbeck.phys.ucl.ac.uk:08476] unidir:
<br>
/tmp/openmpi-sessions-jgu_at_frontend_0/default-universe-8475
<br>
[steinbeck.phys.ucl.ac.uk:08476] top: openmpi-sessions-jgu_at_frontend_0
<br>
[steinbeck.phys.ucl.ac.uk:08476] tmp: /tmp
<br>
Daemon [0,0,1] checking in as pid 8476 on host frontend
<br>
[node0.cluster:08628] [0,0,2] setting up session dir with
<br>
[node0.cluster:08628]   universe default-universe-8475
<br>
[node0.cluster:08628]   user jgu
<br>
[node0.cluster:08628]   host node0
<br>
[node0.cluster:08628]   jobid 0
<br>
[node0.cluster:08628]   procid 2
<br>
[node0.cluster:08628] procdir:
<br>
/tmp/openmpi-sessions-jgu_at_node0_0/default-universe-8475/0/2
<br>
[node0.cluster:08628] jobdir:
<br>
/tmp/openmpi-sessions-jgu_at_node0_0/default-universe-8475/0
<br>
[node0.cluster:08628] unidir:
<br>
/tmp/openmpi-sessions-jgu_at_node0_0/default-universe-8475
<br>
[node0.cluster:08628] top: openmpi-sessions-jgu_at_node0_0
<br>
[node0.cluster:08628] tmp: /tmp
<br>
Daemon [0,0,2] checking in as pid 8628 on host node0
<br>
[steinbeck.phys.ucl.ac.uk:08476] [0,0,1] orted: received launch callback
<br>
[node0.cluster:08628] [0,0,2] orted: received launch callback
<br>
[steinbeck.phys.ucl.ac.uk:08478] [0,1,0] setting up session dir with
<br>
[steinbeck.phys.ucl.ac.uk:08478]        universe default-universe-8475
<br>
[steinbeck.phys.ucl.ac.uk:08478]        user jgu
<br>
[steinbeck.phys.ucl.ac.uk:08478]        host frontend
<br>
[steinbeck.phys.ucl.ac.uk:08478]        jobid 1
<br>
[steinbeck.phys.ucl.ac.uk:08478]        procid 0
<br>
[steinbeck.phys.ucl.ac.uk:08478] procdir:
<br>
/tmp/openmpi-sessions-jgu_at_frontend_0/default-universe-8475/1/0
<br>
[steinbeck.phys.ucl.ac.uk:08478] jobdir:
<br>
/tmp/openmpi-sessions-jgu_at_frontend_0/default-universe-8475/1
<br>
[steinbeck.phys.ucl.ac.uk:08478] unidir:
<br>
/tmp/openmpi-sessions-jgu_at_frontend_0/default-universe-8475
<br>
[steinbeck.phys.ucl.ac.uk:08478] top: openmpi-sessions-jgu_at_frontend_0
<br>
[steinbeck.phys.ucl.ac.uk:08478] tmp: /tmp
<br>
[node0.cluster:08650] [0,1,1] setting up session dir with
<br>
[node0.cluster:08650]   universe default-universe-8475
<br>
[node0.cluster:08650]   user jgu
<br>
[node0.cluster:08650]   host node0
<br>
[node0.cluster:08650]   jobid 1
<br>
[steinbeck.phys.ucl.ac.uk:08478] unidir:
<br>
/tmp/openmpi-sessions-jgu_at_frontend_0/default-universe-8475
<br>
[steinbeck.phys.ucl.ac.uk:08478] top: openmpi-sessions-jgu_at_frontend_0
<br>
[steinbeck.phys.ucl.ac.uk:08478] tmp: /tmp
<br>
[node0.cluster:08650] [0,1,1] setting up session dir with
<br>
[node0.cluster:08650]   universe default-universe-8475
<br>
[node0.cluster:08650]   user jgu
<br>
[node0.cluster:08650]   host node0
<br>
[node0.cluster:08650]   jobid 1
<br>
[node0.cluster:08650]   procid 1
<br>
[node0.cluster:08650] procdir:
<br>
/tmp/openmpi-sessions-jgu_at_node0_0/default-universe-8475/1/1
<br>
[node0.cluster:08650] jobdir:
<br>
/tmp/openmpi-sessions-jgu_at_node0_0/default-universe-8475/1
<br>
[node0.cluster:08650] unidir:
<br>
/tmp/openmpi-sessions-jgu_at_node0_0/default-universe-8475
<br>
[node0.cluster:08650] top: openmpi-sessions-jgu_at_node0_0
<br>
[node0.cluster:08650] tmp: /tmp
<br>
[node0.cluster:08651] [0,1,2] setting up session dir with
<br>
[node0.cluster:08651]   universe default-universe-8475
<br>
[node0.cluster:08651]   user jgu
<br>
[node0.cluster:08651]   host node0
<br>
[node0.cluster:08651]   jobid 1
<br>
[node0.cluster:08651]   procid 2
<br>
[node0.cluster:08651] procdir:
<br>
/tmp/openmpi-sessions-jgu_at_node0_0/default-universe-8475/1/2
<br>
[node0.cluster:08651] jobdir:
<br>
/tmp/openmpi-sessions-jgu_at_node0_0/default-universe-8475/1
<br>
[node0.cluster:08651] unidir:
<br>
/tmp/openmpi-sessions-jgu_at_node0_0/default-universe-8475
<br>
[node0.cluster:08651] top: openmpi-sessions-jgu_at_node0_0
<br>
[node0.cluster:08651] tmp: /tmp
<br>
[steinbeck.phys.ucl.ac.uk:08475] spawn: in job_state_callback(jobid =
<br>
1, state = 0x4)
<br>
[steinbeck.phys.ucl.ac.uk:08475] Info: Setting up debugger process
<br>
table for applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 3
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, frontend,
<br>
/export/data/jgu/wrk/ethene_hhg_align/align-cls-mpi, 8478)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, node0,
<br>
/export/data/jgu/wrk/ethene_hhg_align/align-cls-mpi, 8650)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (2, node0,
<br>
/export/data/jgu/wrk/ethene_hhg_align/align-cls-mpi, 8651)
<br>
[steinbeck.phys.ucl.ac.uk:08478] [0,1,0] ompi_mpi_init completed
<br>
[frontend][0,1,0][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=110
<br>
[frontend][0,1,0][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=110
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3467.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3465.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>In reply to:</strong> <a href="3464.php">Adrian Knoth: "Re: [OMPI users] TCP connection errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3468.php">George Bosilca: "Re: [OMPI users] TCP connection errors"</a>
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
