<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 10:23:48 2009" -->
<!-- isoreceived="20090205152348" -->
<!-- sent="Thu, 5 Feb 2009 16:23:42 +0100" -->
<!-- isosent="20090205152342" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="9b0da5ce0902050723i66094cderfa811875fab88c99_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6E5C189B-E3A4-4F29-B4B8-B52CBE5997AC_at_lanl.gov" -->
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
<strong>Date:</strong> 2009-02-05 10:23:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7978.php">Ted Yu: "[OMPI users] Global Communicator"</a>
<li><strong>Previous message:</strong> <a href="7976.php">Richard Treumann: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>In reply to:</strong> <a href="7955.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7827.php">Allen Barnett: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
<p>Thanks - i downloaded and installed openmpi-1.4a1r20435 and
<br>
now everything works as it should:
<br>
--output-filename :  all processes write their outputs to the correct files
<br>
--xterm           :  all specified processes opened their xterms
<br>
<p>I started my application with --xterm as i wrote in a previous mail:
<br>
- call 'xhost +&lt;remote_node&gt;' for all nodes in my hostfile
<br>
- export DISPLAY=&lt;my_workstation&gt;:0.0
<br>
- call
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 8 -x DISPLAY --hostfile testhosts --xterm
<br>
--ranks=2,3,4,5! ./MPITest
<br>
<p>combining --xterm with --output-filename also worked.
<br>
<p><p>Thanks again!
<br>
&nbsp;&nbsp;Jody
<br>
<p>On Tue, Feb 3, 2009 at 11:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, the problem with both the output filename and the xterm option was
</span><br>
<span class="quotelev1">&gt; that I wasn't passing them back to the remote daemons under the ssh launch
</span><br>
<span class="quotelev1">&gt; environment. I should have that corrected now - things will hopefully work
</span><br>
<span class="quotelev1">&gt; with any tarball of r20407 or above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know...
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 3, 2009, at 11:34 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ah! I know the problem - forgot you are running under ssh, so the
</span><br>
<span class="quotelev2">&gt;&gt; environment doesn't get passed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll have to find a way to pass the output filename to the backend
</span><br>
<span class="quotelev2">&gt;&gt; nodes...should have it later today.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 3, 2009, at 11:09 AM, jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --output-filename
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It creates files, but only for the local processes:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [jody_at_localhost neander]$  mpirun -np 8 -hostfile testhosts
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --output-filename gnana ./MPITest
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ... output ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [jody_at_localhost neander]$ ls -l gna*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rw-r--r-- 1 jody morpho 549 2009-02-03 18:02 gnana.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rw-r--r-- 1 jody morpho 549 2009-02-03 18:02 gnana.1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rw-r--r-- 1 jody morpho 549 2009-02-03 18:02 gnana.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ( i set slots=3 on my workstation)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did you give a location that is on an NFS mount?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, i started mpirun on a drive which all the remote nodes mount as NFS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; drives.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm willing to bet the files are being created - they are on your remote
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes. The daemons create their own local files for output from their
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; procs. We decided to do this for scalability reasons - if we have mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; open all the output files, then you could easily hit the file descriptor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; limit on that node and cause the job not to launch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Check your remote nodes and see if the files are there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where would i have to look? They are not in my home directories on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can fix that easily enough - we'll just test to see if the xterm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; option
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; has been set, and add the -X to ssh if so.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note that you can probably set this yourself right now by -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; plm_rsh_agent
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;ssh -X&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried this, but it didn't work, though we may be getting there:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jody_at_localhost neander]$  mpirun -np 8 -mca plm_rsh_agent &quot;ssh -X&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -hostfile testhosts --xterm 2,3,4,5! -x DISPLAY ./MPITest
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warning: No xauth data; using fake authentication data for X11
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forwarding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warning: No xauth data; using fake authentication data for X11
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forwarding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Warning: No xauth data; using fake authentication data for X11
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forwarding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =&gt; The 3 remote processes  (3,4,5) tried to get access.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I remember having had an xauth problem like this in an other setup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but i've forgotten how to solve it. I'll try to find out, and get back to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you when i figured it out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTW: calling an X-application over SSH works, e.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh -X node_00 xclock
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So what i currently do to have my xterms running:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on my workstation i call
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xhost + &lt;hostname&gt; for all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; machines in my hostfile, to allow them to use X on my workstation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Then i set my DISPLAY variable to point to my workstation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export DISPLAY=&lt;mymachine&gt;:0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Finally, i call mpirun with the -x option (to exports the DISPLAY
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; variable to all nodes) :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 4 -hostfile myfiles -x DISPLAY run_xterm.sh MyApplication
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; arg1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; arg2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here run_xterm.sh is a shell script which creates a useful title for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the xterm window
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and calls the application with all its arguments (-hold leaves the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xterm open after the program terminates):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #!/bin/sh -f
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # feedback for command line
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; echo &quot;Running on node `hostname`&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # for version 1.2 use undocumented env variable
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # for version 1.3 use documented env variable
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export ID=$OMPI_COMM_WORLD_RANK
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if [ X$ID = X ]; then
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export ID=$OMPI_MCA_ns_nds_vpid
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export TITLE=&quot;node #$ID&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # start terminal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xterm -T &quot;$TITLE&quot; -hold  -e  $*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exit 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (i have similar scripts to run gdb or valgrind in xterm windows)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I know that the 'xhost +' is a horror for certain sysadmins,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but i feel quite safe, because the machines listed in my hostfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are not accessible from outside our department.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I haven't found any other alternative to have nice xterms when i can't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; use 'ssh -X'.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To come back to the '--xterm' option: i just ran my xterm-script after
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; doing the above xhost+ and DISPLAY things, and it worked - all local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; remote
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes created their xterm windows. (In other words, the environment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; was
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; set to have my remote nodes use xterms on my workstation.)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Immediately thereafter i called the same application with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 8 -hostfile testhosts --xterm 2,3,4,5! -x DISPLAY ./MPITest
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but still, only the local process (#2) created an xterm.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do you think it would be possible to have open MPI make its
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ssh-connections with '-X',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or are there technical or security-related objections?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mon, Feb 2, 2009 at 4:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Feb 2, 2009, at 2:55 AM, jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The new options are great stuff!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Following your suggestion, i downloaded and installed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and tested the new options. (i have a simple cluster of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 8 machines over tcp). Not everything worked as specified, though:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * timestamp-output : works
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; good!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * xterm : doesn't work completely -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; comma-separated rank list:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Only for the local processes a xterm is opened. The other processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (the ones on remote machines) only output to the stdout of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; calling window.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (Just to be sure i started my own script for opening separate xterms
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - that did work for the remoties, too)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This is a problem we wrestled with for some time. The issue is that we
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; really aren't comfortable modifying the DISPLAY envar on the remote
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; nodes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; like you do in your script. It is fine for a user to do whatever they
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; want,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; but for OMPI to do it...that's another matter. We can't even know for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sure
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; what to do because of the wide range of scenarios that might occur
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun local to you, or on a remote node connected to you via xterm,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; or...?).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What you (the user) need to do is ensure that X11 is setup properly so
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; an Xwindow opened on the remote host is displayed on your screen. In
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; case, I believe you have to enable xforwarding - I'm not an xterm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; expert,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; so
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I can't advise you on how to do this. Suspect you may already know -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; which case, can you please pass it along and I'll add it to our docs?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; :-)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; If a '-1' is given instead of a list of ranks, it fails (locally &amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; with remotes):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [jody_at_localhost neander]$  mpirun -np 4 --xterm -1 ./MPITest
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   orte-odls-base:xterm-rank-out-of-bounds
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; from the file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   help-odls-base.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun was unable to start the specified application as it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; encountered an error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on node localhost. More information may be available above.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Fixed as of r20398 - this was a bug, had an if statement out of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sequence.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * output-filename : doesn't work here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [jody_at_localhost neander]$  mpirun -np 4 --output-filename gnagna
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./MPITest
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [jody_at_localhost neander]$ ls -l gna*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -rw-r--r-- 1 jody morpho 549 2009-02-02 09:07 gnagna.%10lu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; There is output from the processes on remote machines on stdout, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; from the local ones.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Fixed as of r20400 - had a format statement syntax that was okay in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; some
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compilers, but not others.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; A question about installing: i installed the usual way (configure,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; make all install),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; but the new man-files apparently weren't copied to their destination:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; If i do 'man mpirun' i get shown the contents of an old man-file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (without the new options).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I had to do '  less
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt//openmpi-1.4a1r20394/share/man/man1/mpirun.1'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to see them.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Strange - the install should put them in the right place, but I wonder
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; if
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; you updated your manpath to point at it?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; About the xterm-option : when the application ends all xterms are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; closed immediately.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (when doing things 'by hand' i used the -hold option for xterm)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Would it be possible to add this feature for your xterm option?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Perhaps by adding a '!' at the end of the rank list?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Done! A &quot;!&quot; at the end of the list will activate -hold as of r20398.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; About orte_iof: with the new version it works, but no matter which
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank i specify,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; it only prints out rank0's output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [jody_at_localhost ~]$ orte-iof --pid 31049   --rank 4 --stdout
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [localhost]I am #0/9 before the barrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The problem here is that the option name changed from &quot;rank&quot; to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;ranks&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; since you can now specify any number of ranks as comma-separated
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ranges.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; have updated orte-iof so it will gracefully fail if you provide an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; unrecognized cmd line option and output the &quot;help&quot; detailing the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; accepted
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; options.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sun, Feb 1, 2009 at 10:49 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm afraid we discovered a bug in optimized builds with r20392.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; any tarball with r20394 or above.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sorry for the confusion
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Feb 1, 2009, at 5:27 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jan 31, 2009, at 11:39 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For anyone following this thread:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have completed the IOF options discussed below. Specifically, I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; have
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; added the following:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * a new &quot;timestamp-output&quot; option that timestamp's each line of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; output
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * a new &quot;output-filename&quot; option that redirects each proc's output
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; separate rank-named file.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * a new &quot;xterm&quot; option that redirects the output of the specified
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ranks
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to a separate xterm window.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can obtain a copy of the updated code at:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sweet stuff.  :-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Note that the URL/tarball that Ralph cites is a nightly snapshot
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; expire after a while -- we only keep the most 5 recent nightly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tarballs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; available.  You can find Ralph's new IOF stuff in any 1.4a1 nightly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tarball
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; after the one he cited above.  Note that the last part of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tarball
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; name
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; refers to the subversion commit number (which increases
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; monotonically);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.4 nightly snapshot tarball beyond &quot;r20392&quot; will contain this new
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; IOF
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; stuff.  Here's where to get our nightly snapshot tarballs:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Don't read anything into the &quot;1.4&quot; version number -- we've just
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bumped
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; version number internally to be different than the current stable
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; series
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (1.3).  We haven't yet branched for the v1.4 series; hence, &quot;1.4a1&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; currently refers to our development trunk.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7978.php">Ted Yu: "[OMPI users] Global Communicator"</a>
<li><strong>Previous message:</strong> <a href="7976.php">Richard Treumann: "Re: [OMPI users] MPI_Test bug?"</a>
<li><strong>In reply to:</strong> <a href="7955.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7827.php">Allen Barnett: "Re: [OMPI users] Handling output of processes"</a>
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
