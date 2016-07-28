<?
$subject_val = "Re: [OMPI users] Trouble with SGE integration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 04:00:42 2009" -->
<!-- isoreceived="20091201090042" -->
<!-- sent="Tue, 01 Dec 2009 10:00:36 +0100" -->
<!-- isosent="20091201090036" -->
<!-- name="Ondrej Glembek" -->
<!-- email="glembek_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with SGE integration" -->
<!-- id="4B14DB34.2050409_at_fit.vutbr.cz" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EE953C5F-2599-48D3-940C-C7EF435CA5A5_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with SGE integration<br>
<strong>From:</strong> Ondrej Glembek (<em>glembek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 04:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11301.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11299.php">Vishal Shorrghar: "[OMPI users] MTT trivial test is getting failed:"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11295.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11302.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="11302.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>Reuti wrote:
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/homes/kazi/glembek/share/openmpi-1.3.3-64
</span><br>
<span class="quotelev2">&gt;&gt; --with-sge --enable-shared --enable-static --host=x86_64-linux
</span><br>
<span class="quotelev2">&gt;&gt; --build=x86_64-linux NM=x86_64-linux-nm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any list of valid values for --host, --build and NM - and what
</span><br>
<span class="quotelev1">&gt; is NM for? From the ./configure --help I would &quot;assume&quot; that one can
</span><br>
<span class="quotelev1">&gt; tell Open MPI to prepare to BUILD on a PPC platform, although I'm
</span><br>
<span class="quotelev1">&gt; issuing the command on a x86, and the result of the PPC compile should
</span><br>
<span class="quotelev1">&gt; be to run on x86_64. Maybe you can leave it out, as it's the same in
</span><br>
<span class="quotelev1">&gt; your case?
</span><br>
<p>This is not the problem... We have both 32bit and 64bit machines and the
<br>
problem occurs on both (i.e. omitting the --host --build, etc)...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there any way to force the ssh before the (...) term???
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using SSH directly would bypass SGE's startup. What are your entries for
</span><br>
<span class="quotelev1">&gt; qrsh_daemon and so on in SGE's configuration? Which version of SGE?
</span><br>
<p>qstat reports version number as &quot;GE 6.2u4&quot;... Below is qconf -sconf dump.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I think the real problem is, that Open MPI assumes you are outside
</span><br>
<span class="quotelev1">&gt; of SGE and so uses a different startup. Are you resetting any of SGE's
</span><br>
<span class="quotelev1">&gt; environment variables in your custom starter method (like $JOB_ID)?
</span><br>
I don't think that openmpi doesn't know about SGE when it calls the
<br>
starter.sh...
<br>
<p><p>The starter.sh looks like this:
<br>
<p>$$$
<br>
#!/bin/sh
<br>
<p>ulimit -S -c 0
<br>
ulimit -S -t unlimited
<br>
<p>#echo &quot;$@&quot; &gt;&gt;/pub/tmp/starter.log
<br>
<p>#start the job in thus shell
<br>
exec &quot;$@&quot;
<br>
<p><p>so no resetting of any kind. Also the open_info looks ok:
<br>
<p>$$$
<br>
ompi_info | grep gridengine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.3.3)
<br>
<p><p>$$$
<br>
qconf -sconf:
<br>
qconf -sconf
<br>
#global:
<br>
execd_spool_dir              /usr/local/share/SGE/default/spool
<br>
mailer                       /bin/mail
<br>
xterm                        /usr/bin/xterm
<br>
load_sensor                  /usr/local/share/SGE/util/disk.sh
<br>
prolog                       none
<br>
epilog                       none
<br>
shell_start_mode             posix_compliant
<br>
login_shells                 sh,ksh,csh,tcsh,bash
<br>
min_uid                      0
<br>
min_gid                      0
<br>
user_lists                   none
<br>
xuser_lists                  none
<br>
projects                     none
<br>
xprojects                    none
<br>
enforce_project              false
<br>
enforce_user                 auto
<br>
load_report_time             00:00:30
<br>
max_unheard                  00:05:00
<br>
reschedule_unknown           00:00:00
<br>
loglevel                     log_warning
<br>
administrator_mail           linux_at_[hidden]
<br>
set_token_cmd                none
<br>
pag_cmd                      none
<br>
token_extend_time            none
<br>
shepherd_cmd                 none
<br>
qmaster_params               none
<br>
reporting_params             accounting=true reporting=false \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flush_time=00:00:15 joblog=false
<br>
sharelog=00:00:00
<br>
finished_jobs                20
<br>
gid_range                    20000-20100
<br>
qlogin_command               builtin
<br>
qlogin_daemon                builtin
<br>
rlogin_daemon                builtin
<br>
max_aj_instances             2000
<br>
max_aj_tasks                 90000
<br>
max_u_jobs                   0
<br>
max_jobs                     0
<br>
auto_user_oticket            0
<br>
auto_user_fshare             0
<br>
auto_user_default_project    STD
<br>
auto_user_delete_time        0
<br>
delegated_file_staging       false
<br>
rsh_daemon                   builtin
<br>
rsh_command                  builtin
<br>
rlogin_command               builtin
<br>
reprioritize                 0
<br>
jsv_url                      none
<br>
jsv_allowed_mod              ac,h,i,e,o,j,M,N,p,w
<br>
<p><p>Thanx
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanx
</span><br>
<span class="quotelev2">&gt;&gt; Ondrej
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 30.11.2009 um 18:46 schrieb Ondrej Glembek:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, thanx for reply...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried to dump the $@ before calling the exec and here it is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ( test ! -r ./.profile || . ./.profile;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PATH=/homes/kazi/glembek/share/openmpi-1.3.3-64/bin:$PATH ; export
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PATH ;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/homes/kazi/glembek/share/openmpi-1.3.3-64/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ; export LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /homes/kazi/glembek/share/openmpi-1.3.3-64/bin/orted -mca ess env
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca orte_ess_jobid 3870359552 -mca orte_ess_vpid 1 -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_ess_num_procs 2 --hnp-uri
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;3870359552.0;tcp://147.229.8.134:53727&quot; --mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pls_gridengine_verbose 1 --output-filename mpi.log )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like the line gets constructed in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/mca/plm/rsh/plm_rsh_module.c and depends on the shell...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Still I wonder, why mpiexec calls the starter.sh... I thought the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; starter was supposed to call the script which wraps a call to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Correct. This will happen for the master node of this job, i.e. where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the jobscript is executed. But it will also be used for the qrsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -inherit calls. I wonder about one thing: I see only a call to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;orted&quot; and not the above sub-shell on my machines. Did you compile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI with --with-sge?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The original call above would be &quot;ssh node_xy ( test ! ....)&quot; which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems working for ssh and rsh.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just one note: with the starter script you will lose the set PATH and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH, as a new shell is created. It might be necessary to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set it again in your starter method.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am I not right???
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ondrej
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reuti wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Am 30.11.2009 um 16:33 schrieb Ondrej Glembek:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; we are using a custom starter method in our SGE to launch our
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; jobs... It
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; looks something like this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # ... we do whole bunch of stuff here
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #start the job in thus shell
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exec &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the &quot;$@&quot; should be replaced by the path to the jobscript (qsub) or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; command (qrsh) plus the given options.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For the spread tasks to other nodes I get as argument: &quot; orted -mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ess env -mca orte_ess_jobid ...&quot;. Also no . ./.profile.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So I wonder, where the . ./.profile is coming from. Can you put a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; `sleep 60` or alike before the `exec ...` and grep the built line
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from `ps -e f` before it crashes?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The trouble is that mpiexec passes a command which looks like this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ( . ./.profile ..... )
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; which, however, is not a valid exec argument...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is there any way to tell mpiexec to run it in a separate script???
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; idea how to solve this???
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanx
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ondrej Glembek
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   UPGM FIT VUT Brno, L226      Web:   
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.fit.vutbr.cz/~glembek">http://www.fit.vutbr.cz/~glembek</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Bozetechova 2, 612 66        Phone:  +420 54114-1292
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Brno, Czech Republic         Fax:    +420 54114-1290
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   ICQ: 93233896
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   UPGM FIT VUT Brno, L226      Web:    <a href="http://www.fit.vutbr.cz/~glembek">http://www.fit.vutbr.cz/~glembek</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Bozetechova 2, 612 66        Phone:  +420 54114-1292
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Brno, Czech Republic         Fax:    +420 54114-1290
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   ICQ: 93233896
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   UPGM FIT VUT Brno, L226      Web:    <a href="http://www.fit.vutbr.cz/~glembek">http://www.fit.vutbr.cz/~glembek</a>
</span><br>
<span class="quotelev2">&gt;&gt;   Bozetechova 2, 612 66        Phone:  +420 54114-1292
</span><br>
<span class="quotelev2">&gt;&gt;   Brno, Czech Republic         Fax:    +420 54114-1290
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   ICQ: 93233896
</span><br>
<span class="quotelev2">&gt;&gt;   GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
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
<p><pre>
-- 
  Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
  UPGM FIT VUT Brno, L226      Web:    <a href="http://www.fit.vutbr.cz/~glembek">http://www.fit.vutbr.cz/~glembek</a>
  Bozetechova 2, 612 66        Phone:  +420 54114-1292
  Brno, Czech Republic         Fax:    +420 54114-1290
  ICQ: 93233896
  GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11301.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11299.php">Vishal Shorrghar: "[OMPI users] MTT trivial test is getting failed:"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11295.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11302.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="11302.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
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
