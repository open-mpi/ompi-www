<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  3 10:46:47 2006" -->
<!-- isoreceived="20060803144647" -->
<!-- sent="Thu, 03 Aug 2006 08:46:42 -0600" -->
<!-- isosent="20060803144642" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI / PBS / TM interaction" -->
<!-- id="C0F76872.3B2D%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200608031547.20295.martin.schaffoener_at_e-technik.uni-magdeburg.de" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-03 10:46:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1719.php">Peng Wang: "[OMPI users] seg fault in MPI_Comm_size"</a>
<li><strong>Previous message:</strong> <a href="1717.php">Martin Schaff&#195;&#182;ner: "[OMPI users] OpenMPI / PBS / TM interaction"</a>
<li><strong>In reply to:</strong> <a href="1717.php">Martin Schaff&#195;&#182;ner: "[OMPI users] OpenMPI / PBS / TM interaction"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Depending upon what version you are using, this could be resolved fairly
<br>
simply. Check to see if your version supports the &quot;nooversubscribe&quot; command
<br>
line option. If it does, then setting that option may (I believe) resolve
<br>
the problem - at the least, it will only allow you to run one application
<br>
process on each node the allocation you described. If you were to give -np =
<br>
2*x, you would get an error and the job would not be run.
<br>
<p>Ralph
<br>
<p>On 8/3/06 7:47 AM, &quot;Martin Schaff&#246;ner&quot;
<br>
&lt;martin.schaffoener_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<p>I noticed by accident that if I allocate only 1 of 2 CPUs on, say, x
<br>
<span class="quotelev1">&gt; nodes 
</span><br>
with PBS, it is possible to run mpiexec with -np = 2*x, i.e. I can use
<br>
<span class="quotelev1">&gt; both 
</span><br>
CPUs on each SMP node. This is not would I would expect or want. I would
<br>
<span class="quotelev1">&gt; 
</span><br>
guess that this is due to the fact that even if the _one_ orted launched
<br>
<span class="quotelev1">&gt; 
</span><br>
through PBS' TM interface can launch as many processes as you like which is
<br>
<span class="quotelev1">&gt; 
</span><br>
not the case if one would launch MPI processes directly through the TM
<br>
<span class="quotelev1">&gt; 
</span><br>
interface. How can this behavior be fixed?
<br>
<p>Regards,
<br>
<pre>
-- 
Martin
&gt; Schaff&#246;ner
Cognitive Systems Group, Institute of Electronics, Signal
&gt; Processing and 
Communication Technologies, Department of Electrical
&gt; Engineering, 
Otto-von-Guericke University Magdeburg
Phone: +49 391
&gt; 6720063
PGP-Public-Key:
&gt; <a href="http://ca.uni-magdeburg.de/certs/pgp0Cschaffoener64D8BEC0.asc">http://ca.uni-magdeburg.de/certs/pgp0Cschaffoener64D8BEC0.asc</a>
_______________
&gt; ________________________________
users mailing
&gt; list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1719.php">Peng Wang: "[OMPI users] seg fault in MPI_Comm_size"</a>
<li><strong>Previous message:</strong> <a href="1717.php">Martin Schaff&#195;&#182;ner: "[OMPI users] OpenMPI / PBS / TM interaction"</a>
<li><strong>In reply to:</strong> <a href="1717.php">Martin Schaff&#195;&#182;ner: "[OMPI users] OpenMPI / PBS / TM interaction"</a>
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
