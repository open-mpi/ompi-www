<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 30 11:46:40 2007" -->
<!-- isoreceived="20070830154640" -->
<!-- sent="Thu, 30 Aug 2007 08:46:36 -0700" -->
<!-- isosent="20070830154636" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] UD BTL alltoall hangs" -->
<!-- id="46D6E65C.1060101_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="327FF610-6A16-41CD-B74D-4E5EE7D89F96_at_eecs.utk.edu" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-30 11:46:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2273.php">Terry.Dontje_at_[hidden]: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2271.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2268.php">George Bosilca: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/09/2306.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Until then you should be using the latest command &quot;tv8 mpirun -a -np  
</span><br>
<span class="quotelev1">&gt; 2 -bynode `pwd`/NPmpi&quot;. The `pwd` is really important for some  
</span><br>
<span class="quotelev1">&gt; reason, otherwise TotalView is unable to find the executable. The  
</span><br>
<span class="quotelev1">&gt; problem is that the name of the process will be &quot;./NPmpi&quot; and  
</span><br>
<span class="quotelev1">&gt; TotalView does not have access to the path where the executable was  
</span><br>
<span class="quotelev1">&gt; launched (at least that's the reason I think).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thanks George.  That works except for one catch, when I'm asked on 
<br>
startup if I want to stop the parallel job (and hit yes), totalview 
<br>
waits forever trying to connect to a remote server.  I see this on the 
<br>
xterm (shortened in a few places):
<br>
<p>Launching TotalView Debugger Servers with command:
<br>
srun --jobid=0 -N1 -n1 -w`awk -F. 'BEGIN {ORS=&quot;,&quot;} {if (NR==1) ORS=&quot;&quot;; 
<br>
print $1}' $PWD/TVT1Pa4Fjm` -l --input=none 
<br>
/usr/global/tools/totalview.8.1.0-1/linux-x86-64/bin/tvdsvr 
<br>
-callback_host atlas34 -callback_ports atlas31:16382 -set_pws 
<br>
47319a24:4688a7a2 -verbosity info -working_directory $PWD/NetPIPE_3.6.2
<br>
srun: error: Invalid numeric value &quot;0&quot; for jobid.
<br>
<p>I got around this by hitting cancel in the 'waiting to connect' dialog, 
<br>
then setting my slurm jobid manually in file -&gt; preferences -&gt; bulk 
<br>
launch -&gt; command instead of the %J filler, and restarting.  Is there a 
<br>
better work around for this?
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2273.php">Terry.Dontje_at_[hidden]: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2271.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2268.php">George Bosilca: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/09/2306.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
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
