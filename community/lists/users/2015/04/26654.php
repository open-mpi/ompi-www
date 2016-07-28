<?
$subject_val = "Re: [OMPI users] parsability of ompi_info --parsable output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 12:23:31 2015" -->
<!-- isoreceived="20150408162331" -->
<!-- sent="Wed, 8 Apr 2015 09:23:28 -0700" -->
<!-- isosent="20150408162328" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parsability of ompi_info --parsable output" -->
<!-- id="A19373C2-7353-46C3-BA60-75790E1397BC_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20150408154315.GD4618_at_avicenna.ee.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] parsability of ompi_info --parsable output<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-08 12:23:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26655.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26653.php">Lev Givon: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>In reply to:</strong> <a href="26653.php">Lev Givon: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26660.php">Lev Givon: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>Reply:</strong> <a href="26660.php">Lev Givon: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds reasonable - I don&#226;&#128;&#153;t have time to work thru it right now, but we can look at it once Jeff returns as he wrote all that stuff and might see where to make the changes more readily than me.
<br>
<p><span class="quotelev1">&gt; On Apr 8, 2015, at 8:43 AM, Lev Givon &lt;lev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Received from Ralph Castain on Wed, Apr 08, 2015 at 10:46:58AM EDT:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 8, 2015, at 7:23 AM, Lev Givon &lt;lev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The output of ompi_info --parsable is somewhat difficult to parse
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programmatically because it doesn't escape or quote fields that contain colons,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e.g.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build:timestamp:Tue Dec 23 15:47:28 EST 2014
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option:threads:posix (MPI_THREAD_MULTIPLE: no, OPAL support: yes, OMPI progress: no, ORTE progress: yes, Event lib: yes)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there some way to facilitate machine parsing of the output of ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without having to special-case those options/parameters whose data fields might
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contain colons ? If not, it would be nice to quote such fields in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; future releases of ompi_info.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think the assumption was that people would parse this as follows:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * entry before the first colon is the category
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * entry between first and second colons is the subcategory
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * everything past the second colon is the value
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given that the &quot;value&quot; as defined above may still contain colons, it's still
</span><br>
<span class="quotelev1">&gt; necessary to process it to extract the various data in it, e.g., the various MCA
</span><br>
<span class="quotelev1">&gt; parameters, their values, types, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You are right, however, that the current format precludes the use of an
</span><br>
<span class="quotelev2">&gt;&gt; automatic tokenizer looking for colon. I don't think quoting the value field
</span><br>
<span class="quotelev2">&gt;&gt; would really solve that problem - do you have any suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why wouldn't quoting the value field address the parsing problem? Quoting a
</span><br>
<span class="quotelev1">&gt; field that contains colons would effectively permit the output of ompi_info
</span><br>
<span class="quotelev1">&gt; --parsable to be processed just like a CSV file; most CSV readers seem to
</span><br>
<span class="quotelev1">&gt; support inclusion of the separator character in data fields via quoting.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lev Givon
</span><br>
<span class="quotelev1">&gt; Bionet Group | Neurokernel Project
</span><br>
<span class="quotelev1">&gt; <a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26653.php">http://www.open-mpi.org/community/lists/users/2015/04/26653.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26655.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26653.php">Lev Givon: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>In reply to:</strong> <a href="26653.php">Lev Givon: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26660.php">Lev Givon: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>Reply:</strong> <a href="26660.php">Lev Givon: "Re: [OMPI users] parsability of ompi_info --parsable output"</a>
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
