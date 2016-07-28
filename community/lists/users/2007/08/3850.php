<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 14 10:55:39 2007" -->
<!-- isoreceived="20070814145539" -->
<!-- sent="Tue, 14 Aug 2007 11:55:34 -0300" -->
<!-- isosent="20070814145534" -->
<!-- name="Rodrigo Faccioli" -->
<!-- email="faccioli.postgresql_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libmpi.so.0 problem" -->
<!-- id="2439ca350708140755i705f72a6j92572d7ebe5cd177_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46C1B111.10105_at_open-mpi.org" -->
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
<strong>From:</strong> Rodrigo Faccioli (<em>faccioli.postgresql_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-14 10:55:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3851.php">jody: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="3849.php">Tim Prins: "Re: [OMPI users] Help : Need some tuning, or is it a bug ?"</a>
<li><strong>In reply to:</strong> <a href="3847.php">Tim Prins: "Re: [OMPI users] libmpi.so.0 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3852.php">Durga Choudhury: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>Reply:</strong> <a href="3852.php">Durga Choudhury: "Re: [OMPI users] libmpi.so.0 problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Tim Prins for your email.
<br>
<p>However It did't resolve my problem.
<br>
<p>I set the enviroment variable on my Kubuntu Linux:
<br>
<p>faccioli_at_faccioli-desktop:/usr/local/lib$
<br>
PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/bin
<br>
faccioli_at_faccioli-desktop:/usr/local/lib$ LD_LIBRARY_PATH=/usr/local/lib/
<br>
<p>Therefore, set command will display:
<br>
<p>BASH=/bin/bash
<br>
BASH_ARGC=()
<br>
BASH_ARGV=()
<br>
BASH_COMPLETION=/etc/bash_completion
<br>
BASH_COMPLETION_DIR=/etc/bash_completion.d
<br>
BASH_LINENO=()
<br>
BASH_SOURCE=()
<br>
BASH_VERSINFO=([0]=&quot;3&quot; [1]=&quot;2&quot; [2]=&quot;13&quot; [3]=&quot;1&quot; [4]=&quot;release&quot;
<br>
[5]=&quot;x86_64-pc-linux-gnu&quot;)
<br>
BASH_VERSION='3.2.13(1)-release'
<br>
COLORTERM=
<br>
COLUMNS=83
<br>
DBUS_SESSION_BUS_ADDRESS=unix:abstract=/tmp/dbus-C83Ve0QbQz,guid=e07c2bd483a99b50932d080046c199e9
<br>
DESKTOP_SESSION=default
<br>
DIRSTACK=()
<br>
DISPLAY=:0.0
<br>
DM_CONTROL=/var/run/xdmctl
<br>
EUID=1000
<br>
GROUPS=()
<br>
GS_LIB=/home/faccioli/.fonts
<br>
GTK2_RC_FILES=/home/faccioli/.gtkrc-
<br>
2.0-kde:/home/faccioli/.kde/share/config/gtkrc-2.0
<br>
GTK_RC_FILES=/etc/gtk/gtkrc:/home/faccioli/.gtkrc:/home/faccioli/.kde/share/config/gtkrc
<br>
HISTCONTROL=ignoreboth
<br>
HISTFILE=/home/faccioli/.bash_history
<br>
HISTFILESIZE=500
<br>
HISTSIZE=500
<br>
HOME=/home/faccioli
<br>
HOSTNAME=faccioli-desktop
<br>
HOSTTYPE=x86_64
<br>
IFS=$' \t\n'
<br>
KDE_FULL_SESSION=true
<br>
KDE_MULTIHEAD=false
<br>
KONSOLE_DCOP='DCOPRef(konsole-5587,konsole)'
<br>
KONSOLE_DCOP_SESSION='DCOPRef(konsole-5587,session-2)'
<br>
LANG=en_US.UTF-8
<br>
LD_LIBRARY_PATH=/usr/local/lib/
<br>
LESSCLOSE='/usr/bin/lesspipe %s %s'
<br>
LESSOPEN='| /usr/bin/lesspipe %s'
<br>
LINES=33
<br>
LOGNAME=faccioli
<br>
LS_COLORS='no=00:fi=00:di=01;34:ln=01;36:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:su=37;41:sg=30;43:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.gz=01;31:*.bz2=01;31:*.deb=01;31:*.rpm=01;31:*.jar=01;31:*.jpg=01;35:*.jpeg=01;35:*.gif=01;35:*.bmp=01;35:*.pbm=01;35:*.pgm=01;35:*.ppm=01;35:*.tga=01;35:*.xbm=01;35:*.xpm=01;35:*.tif=01;35:*.tiff=01;35:*.png=01;35:*.mov=01;35:*.mpg=01;35:*.mpeg=01;35:*.avi=01;35:*.fli=01;35:*.gl=01;35:*.dl=01;35:*.xcf=01;35:*.xwd=01;35:*.flac=01;35:*.mp3=01;35:*.mpc=01;35:*.ogg=01;35:*.wav=01;35:'
<br>
MACHTYPE=x86_64-pc-linux-gnu
<br>
MAILCHECK=60
<br>
OLDPWD=/home/faccioli
<br>
OPTERR=1
<br>
OPTIND=1
<br>
OSTYPE=linux-gnu
<br>
PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/bin
<br>
PIPESTATUS=([0]=&quot;0&quot;)
<br>
PPID=5587
<br>
<p>Unfortunately,  when I execute mpirun a.out, the message I received is:
<br>
a.out:  error while loading shared libraries: libmpi.so.0: cannot open
<br>
shared object file: No such file or directory
<br>
<p>Thanks,
<br>
<p><p>On 8/14/07, Tim Prins &lt;tprins_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need to set your LD_LIBRARY_PATH. See these FAQ entries:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rodrigo Faccioli wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I need to know what I can resolve my problem. I'm starting my study on
</span><br>
<span class="quotelev2">&gt; &gt; mpi, more specificaly open-mpi.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But, when I execute mpirun a.out, the message I received is: a.out:
</span><br>
<span class="quotelev2">&gt; &gt; error while loading shared libraries: libmpi.so.0: cannot open shared
</span><br>
<span class="quotelev2">&gt; &gt; object file: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The a.out file was obtained through mpicc hello.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3850/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3851.php">jody: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="3849.php">Tim Prins: "Re: [OMPI users] Help : Need some tuning, or is it a bug ?"</a>
<li><strong>In reply to:</strong> <a href="3847.php">Tim Prins: "Re: [OMPI users] libmpi.so.0 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3852.php">Durga Choudhury: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>Reply:</strong> <a href="3852.php">Durga Choudhury: "Re: [OMPI users] libmpi.so.0 problem"</a>
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
