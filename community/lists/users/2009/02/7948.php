<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 12:16:57 2009" -->
<!-- isoreceived="20090203171657" -->
<!-- sent="Tue, 3 Feb 2009 18:16:51 +0100" -->
<!-- isosent="20090203171651" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="9b0da5ce0902030916n6a925c64v6c763a2fbe9c6243_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="34F19679-25DA-4565-AD49-0826282773EF_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Handling output of processes<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-03 12:16:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7949.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7947.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>In reply to:</strong> <a href="7935.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7949.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7949.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
Thanks for the fixes and the &quot;!&quot;.
<br>
<p>--xterm:
<br>
The &quot;!&quot; works, but i still don't have any xterms from my remote nodes
<br>
even with all my xhost+ and -x DISPLAY tricks explained below :(
<br>
<p>--output-filename
<br>
It creates files, but only for the local processes:
<br>
[jody_at_localhost neander]$  mpirun -np 8 -hostfile testhosts
<br>
--output-filename gnana ./MPITest
<br>
&nbsp;&nbsp;&nbsp;... output ...
<br>
[jody_at_localhost neander]$ ls -l gna*
<br>
-rw-r--r-- 1 jody morpho 549 2009-02-03 18:02 gnana.0
<br>
-rw-r--r-- 1 jody morpho 549 2009-02-03 18:02 gnana.1
<br>
-rw-r--r-- 1 jody morpho 549 2009-02-03 18:02 gnana.2
<br>
( i set slots=3 on my workstation)
<br>
<p><pre>
---
Regarding xterms - i'm also no big expert on xterms, but i managed to
get things working for my environment...
Generally, in order to enable X-forwarding, i *would* set the option
   X11Fowarding yes
in the /etc/ssh/sshd_config on the server, and
   X11Fowarding yes
in the /etc/ssh/ssh_config on the client.
I say 'would', because to actually use x forwarding you need to call
ssh with the '-X' option.
Correct me if i'm wrong, but i suspect the -X option is not used when
Open-MPI makes a connection.
So what i currently do to have my xterms running:
on my workstation i call
   xhost + &lt;hostname&gt; for all
machines in my hostfile, to allow them to use X on my workstation.
Then i set my DISPLAY variable to point to my workstation
  export DISPLAY=&lt;mymachine&gt;:0.0
Finally, i call mpirun with the -x option (to exports the DISPLAY
variable to all nodes) :
  mpirun -np 4 -hostfile myfiles -x DISPLAY run_xterm.sh MyApplication arg1 arg2
Here run_xterm.sh is a shell script which creates a useful title for
the xterm window
and calls the application with all its arguments (-hold leaves the
xterm open after the program terminates):
#!/bin/sh -f
# feedback for command line
echo &quot;Running on node `hostname`&quot;
# for version 1.2 use undocumented env variable
# for version 1.3 use documented env variable
export ID=$OMPI_COMM_WORLD_RANK
if [ X$ID = X ]; then
  export ID=$OMPI_MCA_ns_nds_vpid
fi
export TITLE=&quot;node #$ID&quot;
# start terminal
xterm -T &quot;$TITLE&quot; -hold  -e  $*
exit 0
(i have similar scripts to run gdb or valgrind in xterm windows)
I know that the 'xhost +' is a horror for certain sysadmins,
but i feel quite safe, because the machines listed in my hostfile
are not accessible from outside our department.
I haven't found any other alternative to have nice xterms when i can't
use 'ssh -X'.
To come back to the '--xterm' option: i just ran my xterm-script after
doing the above xhost+ and DISPLAY things, and it worked - all local and remote
processes created their xterm windows. (In other words, the environment was
set to have my remote nodes use xterms on my workstation.)
Immediately thereafter i called the same application with
   mpirun -np 8 -hostfile testhosts --xterm 2,3,4,5! -x DISPLAY ./MPITest
but still, only the local process (#2) created an xterm.
Do you think it would be possible to have open MPI make its
ssh-connections with '-X',
or are there technical or security-related objections?
Regards
  Jody
On Mon, Feb 2, 2009 at 4:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;
&gt; On Feb 2, 2009, at 2:55 AM, jody wrote:
&gt;
&gt;&gt; Hi Ralph
&gt;&gt; The new options are great stuff!
&gt;&gt; Following your suggestion, i downloaded and installed
&gt;&gt;
&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz</a>
&gt;&gt;
&gt;&gt; and tested the new options. (i have a simple cluster of
&gt;&gt; 8 machines over tcp). Not everything worked as specified, though:
&gt;&gt; * timestamp-output : works
&gt;
&gt; good!
&gt;
&gt;&gt;
&gt;&gt; * xterm : doesn't work completely -
&gt;&gt;  comma-separated rank list:
&gt;&gt;  Only for the local processes a xterm is opened. The other processes
&gt;&gt;  (the ones on remote machines) only output to the stdout of the
&gt;&gt; calling window.
&gt;&gt;  (Just to be sure i started my own script for opening separate xterms
&gt;&gt; - that did work for the remoties, too)
&gt;
&gt; This is a problem we wrestled with for some time. The issue is that we
&gt; really aren't comfortable modifying the DISPLAY envar on the remote nodes
&gt; like you do in your script. It is fine for a user to do whatever they want,
&gt; but for OMPI to do it...that's another matter. We can't even know for sure
&gt; what to do because of the wide range of scenarios that might occur (e.g., is
&gt; mpirun local to you, or on a remote node connected to you via xterm,
&gt; or...?).
&gt;
&gt; What you (the user) need to do is ensure that X11 is setup properly so that
&gt; an Xwindow opened on the remote host is displayed on your screen. In this
&gt; case, I believe you have to enable xforwarding - I'm not an xterm expert, so
&gt; I can't advise you on how to do this. Suspect you may already know - in
&gt; which case, can you please pass it along and I'll add it to our docs? :-)
&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;  If a '-1' is given instead of a list of ranks, it fails (locally &amp;
&gt;&gt; with remotes):
&gt;&gt;    [jody_at_localhost neander]$  mpirun -np 4 --xterm -1 ./MPITest
&gt;&gt;
&gt;&gt;  --------------------------------------------------------------------------
&gt;&gt;    Sorry!  You were supposed to get help about:
&gt;&gt;        orte-odls-base:xterm-rank-out-of-bounds
&gt;&gt;    from the file:
&gt;&gt;        help-odls-base.txt
&gt;&gt;    But I couldn't find any file matching that name.  Sorry!
&gt;&gt;
&gt;&gt;  --------------------------------------------------------------------------
&gt;&gt;
&gt;&gt;  --------------------------------------------------------------------------
&gt;&gt;    mpirun was unable to start the specified application as it
&gt;&gt; encountered an error
&gt;&gt;    on node localhost. More information may be available above.
&gt;&gt;
&gt;&gt;  --------------------------------------------------------------------------
&gt;
&gt;
&gt; Fixed as of r20398 - this was a bug, had an if statement out of sequence.
&gt;
&gt;
&gt;&gt;
&gt;&gt; * output-filename : doesn't work here:
&gt;&gt;   [jody_at_localhost neander]$  mpirun -np 4 --output-filename gnagna
&gt;&gt; ./MPITest
&gt;&gt;   [jody_at_localhost neander]$ ls -l gna*
&gt;&gt;   -rw-r--r-- 1 jody morpho 549 2009-02-02 09:07 gnagna.%10lu
&gt;&gt;
&gt;&gt;   There is output from the processes on remote machines on stdout, but
&gt;&gt; none
&gt;&gt;   from the local ones.
&gt;
&gt; Fixed as of r20400 - had a format statement syntax that was okay in some
&gt; compilers, but not others.
&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; A question about installing: i installed the usual way (configure,
&gt;&gt; make all install),
&gt;&gt; but the new man-files apparently weren't copied to their destination:
&gt;&gt; If i do 'man mpirun' i get shown the contents of an old man-file
&gt;&gt; (without the new options).
&gt;&gt; I had to do '  less /opt//openmpi-1.4a1r20394/share/man/man1/mpirun.1'
&gt;&gt; to see them.
&gt;
&gt; Strange - the install should put them in the right place, but I wonder if
&gt; you updated your manpath to point at it?
&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; About the xterm-option : when the application ends all xterms are
&gt;&gt; closed immediately.
&gt;&gt; (when doing things 'by hand' i used the -hold option for xterm)
&gt;&gt; Would it be possible to add this feature for your xterm option?
&gt;&gt; Perhaps by adding a '!' at the end of the rank list?
&gt;
&gt; Done! A &quot;!&quot; at the end of the list will activate -hold as of r20398.
&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; About orte_iof: with the new version it works, but no matter which
&gt;&gt; rank i specify,
&gt;&gt; it only prints out rank0's output:
&gt;&gt;  [jody_at_localhost ~]$ orte-iof --pid 31049   --rank 4 --stdout
&gt;&gt;  [localhost]I am #0/9 before the barrier
&gt;&gt;
&gt;
&gt; The problem here is that the option name changed from &quot;rank&quot; to &quot;ranks&quot;
&gt; since you can now specify any number of ranks as comma-separated ranges. I
&gt; have updated orte-iof so it will gracefully fail if you provide an
&gt; unrecognized cmd line option and output the &quot;help&quot; detailing the accepted
&gt; options.
&gt;
&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; Thanks
&gt;&gt;
&gt;&gt; Jody
&gt;&gt;
&gt;&gt; On Sun, Feb 1, 2009 at 10:49 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; I'm afraid we discovered a bug in optimized builds with r20392. Please
&gt;&gt;&gt; use
&gt;&gt;&gt; any tarball with r20394 or above.
&gt;&gt;&gt;
&gt;&gt;&gt; Sorry for the confusion
&gt;&gt;&gt; Ralph
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Feb 1, 2009, at 5:27 AM, Jeff Squyres wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On Jan 31, 2009, at 11:39 AM, Ralph Castain wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; For anyone following this thread:
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; I have completed the IOF options discussed below. Specifically, I have
&gt;&gt;&gt;&gt;&gt; added the following:
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; * a new &quot;timestamp-output&quot; option that timestamp's each line of output
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; * a new &quot;output-filename&quot; option that redirects each proc's output to a
&gt;&gt;&gt;&gt;&gt; separate rank-named file.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; * a new &quot;xterm&quot; option that redirects the output of the specified ranks
&gt;&gt;&gt;&gt;&gt; to a separate xterm window.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; You can obtain a copy of the updated code at:
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Sweet stuff.  :-)
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Note that the URL/tarball that Ralph cites is a nightly snapshot and
&gt;&gt;&gt;&gt; will
&gt;&gt;&gt;&gt; expire after a while -- we only keep the most 5 recent nightly tarballs
&gt;&gt;&gt;&gt; available.  You can find Ralph's new IOF stuff in any 1.4a1 nightly
&gt;&gt;&gt;&gt; tarball
&gt;&gt;&gt;&gt; after the one he cited above.  Note that the last part of the tarball
&gt;&gt;&gt;&gt; name
&gt;&gt;&gt;&gt; refers to the subversion commit number (which increases monotonically);
&gt;&gt;&gt;&gt; any
&gt;&gt;&gt;&gt; 1.4 nightly snapshot tarball beyond &quot;r20392&quot; will contain this new IOF
&gt;&gt;&gt;&gt; stuff.  Here's where to get our nightly snapshot tarballs:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Don't read anything into the &quot;1.4&quot; version number -- we've just bumped
&gt;&gt;&gt;&gt; the
&gt;&gt;&gt;&gt; version number internally to be different than the current stable series
&gt;&gt;&gt;&gt; (1.3).  We haven't yet branched for the v1.4 series; hence, &quot;1.4a1&quot;
&gt;&gt;&gt;&gt; currently refers to our development trunk.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt;&gt; Cisco Systems
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7949.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7947.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>In reply to:</strong> <a href="7935.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7949.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7949.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
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
