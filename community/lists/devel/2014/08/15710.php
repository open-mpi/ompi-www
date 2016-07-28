<?
$subject_val = "[OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 07:08:13 2014" -->
<!-- isoreceived="20140826110813" -->
<!-- sent="Tue, 26 Aug 2014 14:07:53 +0300" -->
<!-- isosent="20140826110753" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)" -->
<!-- id="CAEcYPwBT7yqMfu7PyXtmLDppLLaiX05sxh=HV9Q6TDDnmvrsow_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 07:07:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15711.php">Shamis, Pavel: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
<li><strong>Previous message:</strong> <a href="15709.php">Lisandro Dalcin: "[OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15727.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<li><strong>Reply:</strong> <a href="15727.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While I agree that the code below is rather useless, however I'm not
<br>
sure it should actually fail:
<br>
<p>$ cat comm_split_type.c
<br>
#include &lt;assert.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Comm comm;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_split_type(MPI_COMM_SELF,MPI_UNDEFINED,0,MPI_INFO_NULL,&amp;comm);
<br>
&nbsp;&nbsp;assert(comm == MPI_COMM_NULL);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>$ mpicc comm_split_type.c
<br>
$ ./a.out
<br>
[kw2060:9865] *** An error occurred in MPI_Comm_split_type
<br>
[kw2060:9865] *** reported by process [140735368986625,140071768424448]
<br>
[kw2060:9865] *** on communicator MPI_COMM_SELF
<br>
[kw2060:9865] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[kw2060:9865] *** MPI_ERRORS_ARE_FATAL (processes in this communicator
<br>
will now abort,
<br>
[kw2060:9865] ***    and potentially your MPI job)
<br>
<p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15711.php">Shamis, Pavel: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
<li><strong>Previous message:</strong> <a href="15709.php">Lisandro Dalcin: "[OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15727.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<li><strong>Reply:</strong> <a href="15727.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
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
