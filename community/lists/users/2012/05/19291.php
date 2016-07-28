<?
$subject_val = "[OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 16 06:22:58 2012" -->
<!-- isoreceived="20120516102258" -->
<!-- sent="Wed, 16 May 2012 11:22:51 +0100 (BST)" -->
<!-- isosent="20120516102251" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="[OMPI users] Returned &amp;quot;Unreachable&amp;quot; (-12) instead of &amp;quot;Success&amp;quot; (0)" -->
<!-- id="1337163771.77013.YahooMailNeo_at_web29603.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="mailman.201.1337163516.6823.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-16 06:22:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19292.php">Rohan Deshpande: "[OMPI users] MPI - memory sharing?"</a>
<li><strong>Previous message:</strong> <a href="19290.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19294.php">Ralph Castain: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Reply:</strong> <a href="19294.php">Ralph Castain: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,


I am trying to run an OpenMPI application across two physical machines. 

I get an error &quot;Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)&quot;, and looking through the logs (attached), I cannot seem to find out the cause, and how to fix it.

I see lot of (communication) components being loaded and then unloaded, and I do not see which nodes pick up what kind of comm-interface.

--------------------------------------------------------------------------
At least one pair of MPI processes are unable to reach each other for
MPI communications.&#160; This means that no Open MPI device has indicated
that it can be used to communicate between these processes.&#160; This is
an error; Open MPI requires that all MPI processes be able to reach
each other.&#160; This error can sometimes be the result of forgetting to
specify the &quot;self&quot; BTL.

&#160; Process 1 ([[10782,1],6]) is on host: tik34x
&#160; Process 2 ([[10782,1],0]) is on host: tik33x
&#160; BTLs attempted: self sm tcp

Your MPI job is now going to abort; sorry.

The &quot;mpirun&quot; line is:

mpirun --mca btl self,sm,tcp --mca btl_base_verbose 30 -report-pid -display-map -report-bindings -hostfile hostfile -np 7 -v --rankfile rankfile.txt -v --timestamp-output --tag-output ./xstartwrapper.sh ./run_gdb.sh&#160; 

where the .sh files are fixes for forwarding X-windows from multiple machines to the machines where I am logged in.

Can anyone help?

Thanks a lot.

Best,

Devendra
<br>

<br><p><strong>attached mail follows:</strong><hr>

<p>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19291/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19291/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19291/MPILog.txt">MPILog.txt</a>
</ul>
<!-- attachment="MPILog.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19291/05-MPILog.txt">MPILog.txt</a>
</ul>
<!-- attachment="05-MPILog.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19292.php">Rohan Deshpande: "[OMPI users] MPI - memory sharing?"</a>
<li><strong>Previous message:</strong> <a href="19290.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19294.php">Ralph Castain: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Reply:</strong> <a href="19294.php">Ralph Castain: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
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
