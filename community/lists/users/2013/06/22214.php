<?
$subject_val = "[OMPI users] error: unknown type name 'ompi_jobid_t'";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 25 22:25:30 2013" -->
<!-- isoreceived="20130626022530" -->
<!-- sent="Tue, 25 Jun 2013 21:25:03 -0500" -->
<!-- isosent="20130626022503" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="[OMPI users] error: unknown type name 'ompi_jobid_t'" -->
<!-- id="CAGKz=uJtzM-SmBLfj1yuqr3yiqUenGZ31e4jS025EnZE2ubDEQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] error: unknown type name 'ompi_jobid_t'<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-25 22:25:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22215.php">Ralph Castain: "Re: [OMPI users] error: unknown type name 'ompi_jobid_t'"</a>
<li><strong>Previous message:</strong> <a href="22213.php">eblosch_at_[hidden]: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22215.php">Ralph Castain: "Re: [OMPI users] error: unknown type name 'ompi_jobid_t'"</a>
<li><strong>Reply:</strong> <a href="22215.php">Ralph Castain: "Re: [OMPI users] error: unknown type name 'ompi_jobid_t'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I observe this error with the OpenMPI 1.7.1 &quot;feature&quot;:
<br>
<p>Making all in mca/common/ofacm
<br>
make[2]: Entering directory
<br>
`/gpfs/mira-home/jhammond/MPI/openmpi-1.7.1/build-gcc/ompi/mca/common/ofacm'
<br>
&nbsp;&nbsp;CC       common_ofacm_xoob.lo
<br>
../../../../../ompi/mca/common/ofacm/common_ofacm_xoob.c:158:91:
<br>
error: unknown type name 'ompi_jobid_t'
<br>
&nbsp;static int xoob_ib_address_init(ofacm_ib_address_t *ib_addr, uint16_t
<br>
lid, uint64_t s_id, ompi_jobid_t ep_jobid)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../../ompi/mca/common/ofacm/common_ofacm_xoob.c: In function
<br>
'xoob_ib_address_add_new':
<br>
../../../../../ompi/mca/common/ofacm/common_ofacm_xoob.c:189:5:
<br>
warning: implicit declaration of function 'xoob_ib_address_init'
<br>
[-Wimplicit-function-declaration]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = xoob_ib_address_init(ib_addr, lid, s_id, ep_jobid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [common_ofacm_xoob.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/gpfs/mira-home/jhammond/MPI/openmpi-1.7.1/build-gcc/ompi/mca/common/ofacm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/gpfs/mira-home/jhammond/MPI/openmpi-1.7.1/build-gcc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p>I invoked configure like this:
<br>
<p>../configure CC=gcc CXX=g++ FC=gfortran F77=gfortran
<br>
--prefix=/home/jhammond/MPI/openmpi-1.7.1/install-gcc --with-verbs
<br>
--enable-mpi-thread-multiple --enable-static --enable-shared
<br>
<p>My config.log is attached with bzip2 compression or if you do not
<br>
trust binary attachments, please go to Dropbox and blindly download
<br>
the uncompressed text file.
<br>
<p><a href="https://www.dropbox.com/l/ZxZoE6FNROZuBY7I7wdsgc">https://www.dropbox.com/l/ZxZoE6FNROZuBY7I7wdsgc</a>
<br>
<p>Any suggestions?  I asked the Google and it had not heard of this
<br>
particular error message before.
<br>
<p>Thanks,
<br>
<p>Jeff
<br>
<p>PS Please do not tell Pavan I was here :-)
<br>
PPS I recognize the Streisand effect is now in play and that someone
<br>
will deliberately disobey the previous request because I made it.
<br>
<p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22214/config.log.tbz">config.log.tbz</a>
</ul>
<!-- attachment="config.log.tbz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22215.php">Ralph Castain: "Re: [OMPI users] error: unknown type name 'ompi_jobid_t'"</a>
<li><strong>Previous message:</strong> <a href="22213.php">eblosch_at_[hidden]: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22215.php">Ralph Castain: "Re: [OMPI users] error: unknown type name 'ompi_jobid_t'"</a>
<li><strong>Reply:</strong> <a href="22215.php">Ralph Castain: "Re: [OMPI users] error: unknown type name 'ompi_jobid_t'"</a>
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
