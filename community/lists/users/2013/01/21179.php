<?
$subject_val = "Re: [OMPI users] Invalid filename?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 21 14:47:47 2013" -->
<!-- isoreceived="20130121194747" -->
<!-- sent="Mon, 21 Jan 2013 13:47:41 -0600" -->
<!-- isosent="20130121194741" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Invalid filename?" -->
<!-- id="20130121194741.GI24925_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FBB145AB-89E7-4261-B069-6E9AE54C7D8C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Invalid filename?<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-21 14:47:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21180.php">Rob Latham: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>Previous message:</strong> <a href="21178.php">Ralph Castain: "Re: [OMPI users] Invalid filename?"</a>
<li><strong>In reply to:</strong> <a href="21178.php">Ralph Castain: "Re: [OMPI users] Invalid filename?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jan 21, 2013 at 11:18:02AM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; All we do is import the ROMIO distribution, so I'm afraid you'd have to make that request of them.
</span><br>
<p>You rang?
<br>
<p>ROMIO parses filenames, as the quoted standard suggests it ought to.
<br>
If it finds a : it parses the preceding string as a &quot;file system
<br>
type&quot;.  That's usually short like &quot;ufs&quot; or &quot;nfs&quot; or &quot;bglockless&quot; but I
<br>
guess we wanted to be able to support one day
<br>
&quot;someresearchfswithacrazylongnamefs&quot; .
<br>
<p>Fear not: easy workaround is to just use that file system type prefix.
<br>
ROMIO will stop parsing after finding the first colon.  You can put
<br>
colons galore in the file name after that first colon. so
<br>
&quot;ufs:p:a:t:h:a:l:o:g:i:c:a:l:f:i:l:e:n:a:m:e.c will work.
<br>
<p>We ran into this in pnetcdf land where as you can imagine colon could
<br>
show up when you store timestamps in the file name:
<br>
<p><a href="http://trac.mcs.anl.gov/projects/parallel-netcdf/browser/trunk/README#L19">http://trac.mcs.anl.gov/projects/parallel-netcdf/browser/trunk/README#L19</a>
<br>
<p>(That note went into the README in June 2005.  I guess I should have
<br>
done a better job advertising that ROMIO er, &quot;quirk&quot;? in the
<br>
intervening seven (!) years. )
<br>
<p>==rob
<br>
<p><p><span class="quotelev1">&gt; On Jan 21, 2013, at 10:38 AM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On 01/21/2013 01:00 PM, Reuti wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; although you can create such files in Linux, it's not portable.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://en.wikipedia.org/wiki/Filename">http://en.wikipedia.org/wiki/Filename</a> (Reserved characters and words)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best is to use only characters from POSIX portable character set for filenames. Especially as this syntax with a colon is used to denote the file system, i.e. with the name &quot;nfs:foobar&quot; you will tell MPI that the file &quot;foobar&quot; is located on NFS.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (page 392 in the MPI 2.2 standard)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ok, thank you for the information!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; May I suggest then to have a better error message? :-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Eric
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
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
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21180.php">Rob Latham: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>Previous message:</strong> <a href="21178.php">Ralph Castain: "Re: [OMPI users] Invalid filename?"</a>
<li><strong>In reply to:</strong> <a href="21178.php">Ralph Castain: "Re: [OMPI users] Invalid filename?"</a>
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
