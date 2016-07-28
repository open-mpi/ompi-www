<?
$subject_val = "Re: [OMPI devel] 1.8.4rc2 now available for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 11:35:10 2014" -->
<!-- isoreceived="20141212163510" -->
<!-- sent="Fri, 12 Dec 2014 08:35:06 -0800" -->
<!-- isosent="20141212163506" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc2 now available for testing" -->
<!-- id="6FD04DF3-B3D7-4751-83B3-26FC4929CED1_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="548B1117.6070702_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.4rc2 now available for testing<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 11:35:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>Previous message:</strong> <a href="16547.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] dangling symlinks"</a>
<li><strong>In reply to:</strong> <a href="16545.php">Eric Chamberland: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>Reply:</strong> <a href="16549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have made more of an effort to get valgrind clean on the master - haven&#146;t brought all of it across due to the desire to minimize change in 1.8
<br>
<p>I&#146;ll see what can be done, probably more for 1.8.5 at this point. Most of these look like legitimate leaks that should be addressed as opposed to suppressed.
<br>
<p><p><span class="quotelev1">&gt; On Dec 12, 2014, at 8:00 AM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/11/2014 05:45 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; by the reporters. Still, I would appreciate a fairly thorough testing as
</span><br>
<span class="quotelev2">&gt;&gt; this is expected to be the last 1.8 series release for some time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is is relevant to report valgrind leaks?  Maybe they are &quot;normal&quot; or not, I don't know.  If they are normal, maybe suppressions should be added to .../share/openmpi/openmpi-valgrind.supp before the release?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a simple test case ;-) :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cat mpi_init_finalize.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc -o mpi_init_finalize mpi_init_finalize.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 valgrind -v --suppressions=/opt/openmpi-1.8.4rc2/share/openmpi/openmpi-valgrind.supp --gen-suppressions=all --leak-check=full --leak-resolution=high --show-reachable=yes --error-limit=no --num-callers=24 --track-fds=yes --log-file=valgrind_out.n%q{OMPI_COMM_WORLD_RANK} ./mpi_init_finalize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; running with 2 processes generates some more:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -np 2 .... --log-file=valgrind_out_2proc.n%q{OMPI_COMM_WORLD_RANK} ./mpi_init_finalize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which results in the files attached...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;valgrind_out.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16545.php">http://www.open-mpi.org/community/lists/devel/2014/12/16545.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>Previous message:</strong> <a href="16547.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] dangling symlinks"</a>
<li><strong>In reply to:</strong> <a href="16545.php">Eric Chamberland: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>Reply:</strong> <a href="16549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
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
