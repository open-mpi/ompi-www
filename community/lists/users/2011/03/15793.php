<?
$subject_val = "Re: [OMPI users] Mac OS X Static PGI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 16:22:21 2011" -->
<!-- isoreceived="20110303212221" -->
<!-- sent="Thu, 3 Mar 2011 14:22:11 -0700" -->
<!-- isosent="20110303212211" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mac OS X Static PGI" -->
<!-- id="83FCAC9B-7C7B-447D-B868-0E1103EBA35C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D6FF9D8.7090600_at_marine.rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mac OS X Static PGI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-03 16:22:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15794.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="15792.php">Harald Anlauf: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>In reply to:</strong> <a href="15791.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15850.php">Jeff Squyres: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Reply:</strong> <a href="15850.php">Jeff Squyres: "Re: [OMPI users] Mac OS X Static PGI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Really appreciate you having looked into this!
<br>
<p>Unfortunately, I can't see a way to resolve this for the general public. It looks more to me like a PGI bug, frankly - not supporting code in a system-level include makes no sense to me. But I confess this seems to be PGI's mode of operation as I've seen similar issues with their compilers under other OS's as well.
<br>
<p>We obviously cannot replace Mac's if.h with the PGI-custom version, nor can we distribute the PGI-custom version for use in that situation. So until/unless PGI fixes their problem, I think this has to be a one-off solution.
<br>
<p>Again, thanks for looking into it. Glad that it works for you!
<br>
Ralph
<br>
<p><p>On Mar 3, 2011, at 1:28 PM, David Robertson wrote:
<br>
<p><span class="quotelev1">&gt; UPDATE:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the delay but I wanted to make sure PGI was ok with me sharing their workaround.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Further conversation with PGI tech support has yielded a solution. The opal/util/if.c file has the following around line 63:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;net/if.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the explanation I have from PGI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;&lt;&lt; Start Quote
</span><br>
<span class="quotelev1">&gt; For 64-bit only there might be an issue of 'not running/crashing'
</span><br>
<span class="quotelev1">&gt; when it tries to establish the connection.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason is probably because a source file  includes &lt;net/if.h&gt;.
</span><br>
<span class="quotelev1">&gt; &lt;net/if.h&gt; has some source code that we don't support , namely
</span><br>
<span class="quotelev1">&gt; #pragma pack(4)
</span><br>
<span class="quotelev1">&gt; I think currently ignore it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The file is: opal/util/if.c  that  includes &lt;net/if.h&gt;.
</span><br>
<span class="quotelev1">&gt; You may succeed  by  including the  attached pgi.h instead of &lt;net/if.h&gt;.
</span><br>
<span class="quotelev1">&gt; End Quote &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I followed this advise along with editing the share/openmpi/mpif*-wrapper-data.txt files to have full paths to the static libraries instead of just -lmpi_f90, -lmpi_f77, -lmpi, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dave
</span><br>
<span class="quotelev1">&gt; &lt;pgi.h&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="15794.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="15792.php">Harald Anlauf: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>In reply to:</strong> <a href="15791.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15850.php">Jeff Squyres: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Reply:</strong> <a href="15850.php">Jeff Squyres: "Re: [OMPI users] Mac OS X Static PGI"</a>
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
