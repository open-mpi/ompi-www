<?
$subject_val = "Re: [OMPI devel] orte question";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 23 13:43:25 2011" -->
<!-- isoreceived="20110723174325" -->
<!-- sent="Sat, 23 Jul 2011 11:43:10 -0600" -->
<!-- isosent="20110723174310" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte question" -->
<!-- id="EE45C0CF-F685-4E0C-9691-E232F1D2A912_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="26E0BA93-4E12-4100-9F74-9F089369AC2F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-23 13:43:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9545.php">bin wang: "[OMPI devel] need help to add a module"</a>
<li><strong>Previous message:</strong> <a href="9543.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<li><strong>In reply to:</strong> <a href="9543.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9547.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<li><strong>Reply:</strong> <a href="9547.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gar - have to eat my words a bit. The jobid requested by orte-ps is just the &quot;local&quot; jobid - i.e., it is expecting you to provide a number from 0-N, as I described below (copied here):
<br>
<p><span class="quotelev1">&gt; A jobid of 1 indicates the primary application, 2 and above would specify comm_spawned jobs. 
</span><br>
<p>Not providing the jobid at all corresponds to wildcard and returns the status of all jobs under that mpirun.
<br>
<p>To specify which mpirun you want info on, you use the --pid option. It is this option that isn't working properly - orte-ps returns info from all mpiruns and doesn't check to provide only data from the given pid.
<br>
<p>I'll fix that part, and implement the parsable output.
<br>
<p><p>On Jul 22, 2011, at 8:55 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 22, 2011, at 3:57 PM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'd like three things :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; a) A --report-jobid option that prints the jobid on the first line in a form that can be passed to the -jobid option on ompi-ps. Probably tagging it in the output if -tag-output is enabled (e.g. jobid:&lt;jobid&gt;) would be a good idea.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; b) The orte-ps command output to use the same jobid format.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I started looking at the above, and found that orte-ps is just plain wrong in the way it handles jobid. The jobid consists of two fields: a 16-bit number indicating the mpirun, and a 16-bit number indicating the job within that mpirun. Unfortunately, orte-ps sends a data request to every mpirun out there instead of only to the one corresponding to that jobid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What we probably should do is have you indicate the mpirun of interest via the -pid option, and then let jobid tell us which job you want within that mpirun. A jobid of 1 indicates the primary application, 2 and above would specify comm_spawned jobs. A jobid of -1 would return the status of all jobs under that mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If multiple mpiruns are being reported, then the &quot;jobid&quot; in the report should again be the &quot;local&quot; jobid within that mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After all, you don't really care what the orte-internal 16-bit identifier is for that mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; c) A more easily parsable output format from ompi-ps. It doesn't need to be a full blown XML format, just something like the following would suffice:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; jobid:719585280:state:Running:slots:1:num procs:4
</span><br>
<span class="quotelev2">&gt;&gt; process_name:./x:rank:0:pid:3082:node:node1.com:state:Running
</span><br>
<span class="quotelev2">&gt;&gt; process_name:./x:rank:1:pid:4567:node:node5.com:state:Running
</span><br>
<span class="quotelev2">&gt;&gt; process_name:./x:rank:2:pid:2343:node:node4.com:state:Running
</span><br>
<span class="quotelev2">&gt;&gt; process_name:./x:rank:3:pid:3422:node:node7.com:state:Running
</span><br>
<span class="quotelev2">&gt;&gt; jobid:345346663:state:running:slots:1:num procs:2
</span><br>
<span class="quotelev2">&gt;&gt; process_name:./x:rank:0:pid:5563:node:node2.com:state:Running
</span><br>
<span class="quotelev2">&gt;&gt; process_name:./x:rank:1:pid:6677:node:node3.com:state:Running
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shouldn't be too hard to do - bunch of if-then-else statements required, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'd be happy to help with any or all of these.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Appreciate the offer - let me see how hard this proves to be...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 22, 2011, at 10:18 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm...well, it looks like we could have made this nicer than we did :-/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you add --report-uri to the mpirun command line, you'll get back the uri for that mpirun. This has the form of &lt;jobid&gt;:&lt;uri&gt;. As the -h option indicates:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -report-uri | --report-uri &lt;arg0&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       Printout URI on stdout [-], stderr [+], or a file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       [anything else]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The &quot;jobid&quot; required by the orte-ps command is the one reported there. We could easily add a --report-jobid option if that makes things easier.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As to the difference in how orte-ps shows the jobid...well, that's probably historical. orte-ps uses an orte utility function to print the jobid, and that utility always shows the jobid in component form. Again, could add or just use the integer version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 22, 2011, at 7:01 AM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does anyone know if it's possible to get the orte jobid from the mpirun command? If not, how are you supposed to get it to use with orte-ps? Also, orte-ps reports the jobid in [x,y] notation, but the jobid argument seems to be an integer. How does that work?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9545.php">bin wang: "[OMPI devel] need help to add a module"</a>
<li><strong>Previous message:</strong> <a href="9543.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<li><strong>In reply to:</strong> <a href="9543.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9547.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<li><strong>Reply:</strong> <a href="9547.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
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
