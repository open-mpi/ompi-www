<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 14 12:01:38 2007" -->
<!-- isoreceived="20070814160138" -->
<!-- sent="Tue, 14 Aug 2007 12:01:36 -0400" -->
<!-- isosent="20070814160136" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libmpi.so.0 problem" -->
<!-- id="46C1D1E0.9000100_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46C1D09F.6060906_at_open-mpi.org" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-14 12:01:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3856.php">Tim Prins: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="3854.php">Tim Prins: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>In reply to:</strong> <a href="3854.php">Tim Prins: "Re: [OMPI users] libmpi.so.0 problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I meant to say, &quot;exporting the variables is *not* good enough&quot;.
<br>
<p>Tim
<br>
<p>Tim Prins wrote:
<br>
<span class="quotelev1">&gt; In general, exporting the variables is good enough. You really should be 
</span><br>
<span class="quotelev1">&gt; setting the variables in the appropriate shell (non-interactive) login 
</span><br>
<span class="quotelev1">&gt; scripts, such as .bashrc (I again point you to the same FAQ entries for 
</span><br>
<span class="quotelev1">&gt; more information: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a> and 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a> )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try running:
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 printenv
</span><br>
<span class="quotelev1">&gt; to see what variables are set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also,
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ldd a.out
</span><br>
<span class="quotelev1">&gt; will show the libraries your executable is trying to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Durga Choudhury wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Did you export your variables? Otherwise the child shell that forks the 
</span><br>
<span class="quotelev2">&gt;&gt; MPI process will not inherit it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; On 8/14/07, *Rodrigo Faccioli* &lt;faccioli.postgresql_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:faccioli.postgresql_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks, Tim Prins for your email.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     However It did't resolve my problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I set the enviroment variable on my Kubuntu Linux:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     faccioli_at_faccioli-desktop:/usr/local/lib$
</span><br>
<span class="quotelev2">&gt;&gt;     PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/bin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     faccioli_at_faccioli-desktop:/usr/local/lib$
</span><br>
<span class="quotelev2">&gt;&gt;     LD_LIBRARY_PATH=/usr/local/lib/
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Therefore, set command will display:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     BASH=/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt;     BASH_ARGC=()
</span><br>
<span class="quotelev2">&gt;&gt;     BASH_ARGV=()
</span><br>
<span class="quotelev2">&gt;&gt;     BASH_COMPLETION=/etc/bash_completion
</span><br>
<span class="quotelev2">&gt;&gt;     BASH_COMPLETION_DIR=/etc/bash_completion.d
</span><br>
<span class="quotelev2">&gt;&gt;     BASH_LINENO=()
</span><br>
<span class="quotelev2">&gt;&gt;     BASH_SOURCE=()
</span><br>
<span class="quotelev2">&gt;&gt;     BASH_VERSINFO=([0]=&quot;3&quot; [1]=&quot;2&quot; [2]=&quot;13&quot; [3]=&quot;1&quot; [4]=&quot;release&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     [5]=&quot;x86_64-pc-linux-gnu&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     BASH_VERSION='3.2.13(1)-release'
</span><br>
<span class="quotelev2">&gt;&gt;     COLORTERM=
</span><br>
<span class="quotelev2">&gt;&gt;     COLUMNS=83
</span><br>
<span class="quotelev2">&gt;&gt;     DBUS_SESSION_BUS_ADDRESS=unix:abstract=/tmp/dbus-C83Ve0QbQz,guid=e07c2bd483a99b50932d080046c199e9
</span><br>
<span class="quotelev2">&gt;&gt;     DESKTOP_SESSION=default
</span><br>
<span class="quotelev2">&gt;&gt;     DIRSTACK=()
</span><br>
<span class="quotelev2">&gt;&gt;     DISPLAY=: 0.0
</span><br>
<span class="quotelev2">&gt;&gt;     DM_CONTROL=/var/run/xdmctl
</span><br>
<span class="quotelev2">&gt;&gt;     EUID=1000
</span><br>
<span class="quotelev2">&gt;&gt;     GROUPS=()
</span><br>
<span class="quotelev2">&gt;&gt;     GS_LIB=/home/faccioli/.fonts
</span><br>
<span class="quotelev2">&gt;&gt;     GTK2_RC_FILES=/home/faccioli/.gtkrc-2.0-kde:/home/faccioli/.kde/share/config/gtkrc-2.0
</span><br>
<span class="quotelev2">&gt;&gt;     GTK_RC_FILES=/etc/gtk/gtkrc:/home/faccioli/.gtkrc:/home/faccioli/.kde/share/config/gtkrc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     HISTCONTROL=ignoreboth
</span><br>
<span class="quotelev2">&gt;&gt;     HISTFILE=/home/faccioli/.bash_history
</span><br>
<span class="quotelev2">&gt;&gt;     HISTFILESIZE=500
</span><br>
<span class="quotelev2">&gt;&gt;     HISTSIZE=500
</span><br>
<span class="quotelev2">&gt;&gt;     HOME=/home/faccioli
</span><br>
<span class="quotelev2">&gt;&gt;     HOSTNAME=faccioli-desktop
</span><br>
<span class="quotelev2">&gt;&gt;     HOSTTYPE=x86_64
</span><br>
<span class="quotelev2">&gt;&gt;     IFS=$' \t\n'
</span><br>
<span class="quotelev2">&gt;&gt;     KDE_FULL_SESSION=true
</span><br>
<span class="quotelev2">&gt;&gt;     KDE_MULTIHEAD=false
</span><br>
<span class="quotelev2">&gt;&gt;     KONSOLE_DCOP='DCOPRef(konsole-5587,konsole)'
</span><br>
<span class="quotelev2">&gt;&gt;     KONSOLE_DCOP_SESSION='DCOPRef(konsole-5587,session-2)'
</span><br>
<span class="quotelev2">&gt;&gt;     LANG=en_US.UTF-8
</span><br>
<span class="quotelev2">&gt;&gt;     LD_LIBRARY_PATH=/usr/local/lib/
</span><br>
<span class="quotelev2">&gt;&gt;     LESSCLOSE='/usr/bin/lesspipe %s %s'
</span><br>
<span class="quotelev2">&gt;&gt;     LESSOPEN='| /usr/bin/lesspipe %s'
</span><br>
<span class="quotelev2">&gt;&gt;     LINES=33
</span><br>
<span class="quotelev2">&gt;&gt;     LOGNAME=faccioli
</span><br>
<span class="quotelev2">&gt;&gt;     LS_COLORS='no=00:fi=00:di=01;34:ln=01;36:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:su=37;41:sg=30;43:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.tar=01;31:*.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.zip=01;31:*.z=01;31:*.Z=01;31:*.gz=01;31:*.bz2=01;31:*.deb=01;31:*.rpm=01;31:*.jar=01;31:*.jpg=01;35:*.jpeg=01;35:*.gif=01;35:*.bmp=01;35:*.pbm=01;35:*.pgm=01;35:*.ppm=01;35:*.tga=01;35:*.xbm=01;35:*.xpm=01;35:*.tif=01;35:*.tiff=01;35:*.png=01;35:*.mov=01;35:*.mpg=01;35:*.mpeg=01;35:*.avi=01;35:*.fli=01;35:*.gl=01;35:*.dl=01;35:*.xcf=01;35:*.xwd=01;35:*.flac=01;35:*.mp3=01;35:*.mpc=01;35:*.ogg=01;35:*.wav=01;35:'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MACHTYPE=x86_64-pc-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;     MAILCHECK=60
</span><br>
<span class="quotelev2">&gt;&gt;     OLDPWD=/home/faccioli
</span><br>
<span class="quotelev2">&gt;&gt;     OPTERR=1
</span><br>
<span class="quotelev2">&gt;&gt;     OPTIND=1
</span><br>
<span class="quotelev2">&gt;&gt;     OSTYPE=linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;     PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/bin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     PIPESTATUS=([0]=&quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     PPID=5587
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Unfortunately,  when I execute mpirun a.out, the message I received
</span><br>
<span class="quotelev2">&gt;&gt;     is: a.out:  error while loading shared libraries: libmpi.so.0 :
</span><br>
<span class="quotelev2">&gt;&gt;     cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On 8/14/07, *Tim Prins* &lt; tprins_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:tprins_at_[hidden]&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         You need to set your LD_LIBRARY_PATH. See these FAQ entries:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Rodrigo Faccioli wrote:
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; I need to know what I can resolve my problem. I'm starting my
</span><br>
<span class="quotelev2">&gt;&gt;         study on
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; mpi, more specificaly open-mpi.
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; But, when I execute mpirun a.out, the message I received is:
</span><br>
<span class="quotelev2">&gt;&gt;         a.out:
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; error while loading shared libraries: libmpi.so.0: cannot
</span><br>
<span class="quotelev2">&gt;&gt;         open shared
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; The a.out file was obtained through mpicc hello.c
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;&gt;         ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;          &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Its a battle between humans and communists;
</span><br>
<span class="quotelev2">&gt;&gt; Which side are you in?
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="3856.php">Tim Prins: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="3854.php">Tim Prins: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>In reply to:</strong> <a href="3854.php">Tim Prins: "Re: [OMPI users] libmpi.so.0 problem"</a>
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
