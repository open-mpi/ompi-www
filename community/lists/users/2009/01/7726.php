<?
$subject_val = "Re: [OMPI users] How to know which task on which node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 19 03:33:22 2009" -->
<!-- isoreceived="20090119083322" -->
<!-- sent="Mon, 19 Jan 2009 09:33:12 +0100" -->
<!-- isosent="20090119083312" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to know which task on which node" -->
<!-- id="49743AC8.4010701_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f4e1c520901182320u7d29b403n7b0165f45d37589_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to know which task on which node<br>
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-19 03:33:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7727.php">kmuriki_at_[hidden]: "Re: [OMPI users] How to know which task on which node"</a>
<li><strong>Previous message:</strong> <a href="7725.php">gaurav gupta: "[OMPI users] How to know which task on which node"</a>
<li><strong>In reply to:</strong> <a href="7725.php">gaurav gupta: "[OMPI users] How to know which task on which node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7727.php">kmuriki_at_[hidden]: "Re: [OMPI users] How to know which task on which node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
gaurav gupta wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to know that which task is running on which node. Is there any 
</span><br>
<span class="quotelev1">&gt; way to know this.
</span><br>
<span class="quotelev1">&gt; Is there any profiling tool provided along with openmpi to calculate 
</span><br>
<span class="quotelev1">&gt; time taken in various steps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; GAURAV GUPTA
</span><br>
<span class="quotelev1">&gt; B.Tech III Yr. , Department of Computer Science &amp; Engineering
</span><br>
<span class="quotelev1">&gt; IT BHU , Varanasi
</span><br>
<span class="quotelev1">&gt; Contacts
</span><br>
<span class="quotelev1">&gt; Phone No: +91-99569-49491
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; e-mail :
</span><br>
<span class="quotelev1">&gt; gaurav.gupta_at_[hidden] &lt;mailto:gaurav.gupta_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; gaurav.gupta.cse06_at_[hidden] &lt;mailto:gaurav.gupta.cse06_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 1989.gaurav_at_[hidden] &lt;mailto:1989.gaurav_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
Hi Gupta,
<br>
<p>I ran into the same problem. In my case I wanted to define the root node 
<br>
on a specific host for a synchronization step using rsync between the 
<br>
hosts running the processes. Here is some linux C code that might help 
<br>
you. It builds an array mpi_host with the hostname of each node, and an 
<br>
index array mpi_host_rank that shows which processes are running on the 
<br>
same node. The BUG, MY_MALLOC and my_printf macro's are wrappers for 
<br>
C-functions assert, malloc and printf. The code assumes name-resolution 
<br>
is the same on all nodes.
<br>
<p>#define LINE_MAX 1024
<br>
#define MPI_NPROCS_MAX 256
<br>
#define INVALID (-1)
<br>
<p>int mpi_nprocs;
<br>
int mpi_id;
<br>
int mpi_nhosts;
<br>
int mpi_root_id;
<br>
char *mpi_hosts;
<br>
char *mpi_host[MPI_NPROCS_MAX];
<br>
int mpi_host_rank[MPI_NPROCS_MAX];
<br>
<p>int main(void)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int iproc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char hostname[LINE_MAX];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpi_nprocs = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_id = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_nhosts = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_root_id = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;mpi_nprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;BUG(mpi_nprocs &gt; MPI_NPROCS_MAX)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;mpi_id);
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;BUG(gethostname(hostname, LINE_MAX) != 0)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;REGISTER_MALLOC(mpi_hosts, char, LINE_MAX * mpi_nprocs)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (iproc = 0; iproc &lt; mpi_nprocs; iproc++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_host[iproc] = mpi_hosts + iproc * LINE_MAX;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (mpi_nprocs == 1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcpy(mpi_host[0], hostname);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Allgather(hostname, LINE_MAX, MPI_CHAR,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_hosts, LINE_MAX, MPI_CHAR, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (iproc = 0; iproc &lt; mpi_nprocs; iproc++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_host_rank[iproc] = INVALID;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_nhosts = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (iproc = 0; iproc &lt; mpi_nprocs; iproc++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int jproc;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mpi_host_rank[iproc] != INVALID) continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;++mpi_nhosts;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BUG(mpi_nhosts &gt; mpi_nprocs)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_host_rank[iproc] = mpi_nhosts - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (jproc = iproc + 1; jproc &lt; mpi_nprocs; jproc++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mpi_host_rank[jproc] != INVALID) continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (strcasecmp(mpi_host[jproc], mpi_host[iproc]) == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_host_rank[jproc] = mpi_host_rank[iproc];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;//find specific host if available
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_root_id = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (iproc = 0; iproc &lt; mpi_nprocs; iproc++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (strcasecmp(mpi_host[iproc], &quot;nodep140&quot;) == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_root_id = iproc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;BUG(mpi_nprocs &lt; 1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;BUG(mpi_nhosts &lt; 1)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;my_printf(&quot;hostname=%s\n&quot;, hostname);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;my_printf(&quot;mpi_nprocs=%d\n&quot;, mpi_nprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;my_printf(&quot;mpi_id=%d\n&quot;, mpi_id);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (iproc = 0; iproc &lt; mpi_nprocs; iproc++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_printf(&quot;iproc=%d host=%s\n&quot;, iproc, mpi_host[iproc]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;my_printf(&quot;mpi_nhosts=%d\n&quot;, mpi_nhosts);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (iproc = 0; iproc &lt; mpi_nprocs; iproc++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_printf(&quot;iproc=%d host_rank=%d\n&quot;, iproc, mpi_host_rank[iproc]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;my_printf(&quot;mpi_root_id=%d host=%s host rank=%d\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_root_id, mpi_host[mpi_root_id], mpi_host_rank[mpi_root_id]);
<br>
}
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7726/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7727.php">kmuriki_at_[hidden]: "Re: [OMPI users] How to know which task on which node"</a>
<li><strong>Previous message:</strong> <a href="7725.php">gaurav gupta: "[OMPI users] How to know which task on which node"</a>
<li><strong>In reply to:</strong> <a href="7725.php">gaurav gupta: "[OMPI users] How to know which task on which node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7727.php">kmuriki_at_[hidden]: "Re: [OMPI users] How to know which task on which node"</a>
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
