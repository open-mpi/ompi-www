<?
$subject_val = "[OMPI devel] MPI_Mprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 31 02:58:20 2012" -->
<!-- isoreceived="20120731065820" -->
<!-- sent="Tue, 31 Jul 2012 02:58:12 -0400" -->
<!-- isosent="20120731065812" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Mprobe" -->
<!-- id="50178204.6030405_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Mprobe<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-31 02:58:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11345.php">Jeff Squyres: "Re: [OMPI devel] MPI_Mprobe"</a>
<li><strong>Previous message:</strong> <a href="11343.php">Rolf vandeVaart: "Re: [OMPI devel] The hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11345.php">Jeff Squyres: "Re: [OMPI devel] MPI_Mprobe"</a>
<li><strong>Reply:</strong> <a href="11345.php">Jeff Squyres: "Re: [OMPI devel] MPI_Mprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have some questions originally motivated by some mpif-h/MPI_Mprobe 
<br>
failures we've seen in SPARC MTT runs at 64-bit in both v1.7 and v1.9, 
<br>
but my poking around spread out from there.
<br>
<p>The main issue is this.  If I go to ompi/mpi/fortran/mpif-h, I see six 
<br>
files (*recv_f and *probe_f) that take status arguments.  Normally, we 
<br>
do some conversion between Fortran and C status arguments.  These files 
<br>
test if OMPI_SIZEOF_FORTRAN_INTEGER==SIZEOF_INT, however, and bypass the 
<br>
conversion if the two types of integers are the same size.  The problem 
<br>
with this is that while the structures may be the same size, the C 
<br>
status has a size_t in it.  So, while the Fortran INTEGER array can 
<br>
start on any 4-byte alignment, the C status can end up with a 64-bit 
<br>
pointer on a 4-byte alignment.  That's not pleasant in general and can 
<br>
incur some serious hand-slapping on SPARC.  Specifically, SPARC/-m64 
<br>
errors out on *probe and *recv with MPI_PROC_NULL sources.  Would it be 
<br>
all right if I removed these &quot;shorts cuts&quot;?
<br>
<p>Here are two more smaller issues.  I'm pretty sure about them and can 
<br>
make the appropriate changes, but if someone wants to give feedback...
<br>
<p>1)  If I look at, say, the v1.7 MPI_Mprobe man page, it says:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A  matching  probe  with  MPI_PROC_NULL  as  source  returns
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;message  =  MPI_MESSAGE_NULL...
<br>
<p>In contrast, if I look at ibm/pt2pt/mprobe_mpifh.f90, it's checking the 
<br>
message to be MPI_MESSAGE_NO_PROC.  Further, if I look at the source 
<br>
code, mprobe.c seems to set the message to &quot;no proc&quot;.  So, I take it the 
<br>
man page is wrong?  It should say &quot;message = MPI_MESSAGE_NO_PROC&quot;?
<br>
<p>2)  Next, looking further at mprobe.c, it looks like this:
<br>
<p>int MPI_Mprobe(int source, int tag, MPI_Comm comm,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Message *message, MPI_Status *status)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_PROC_NULL == source) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_STATUS_IGNORE != status) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*status = ompi_request_empty.req_status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*message = &amp;ompi_message_no_proc.message;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;......
<br>
}
<br>
<p>This means that if source==MPI_PROC_NULL and status==MPI_STATUS_IGNORE, 
<br>
the message does not get set.  The assignment to *message should be 
<br>
moved outside the status check, right?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11345.php">Jeff Squyres: "Re: [OMPI devel] MPI_Mprobe"</a>
<li><strong>Previous message:</strong> <a href="11343.php">Rolf vandeVaart: "Re: [OMPI devel] The hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11345.php">Jeff Squyres: "Re: [OMPI devel] MPI_Mprobe"</a>
<li><strong>Reply:</strong> <a href="11345.php">Jeff Squyres: "Re: [OMPI devel] MPI_Mprobe"</a>
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
