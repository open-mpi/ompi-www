<?
$subject_val = "[OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 31 07:36:14 2010" -->
<!-- isoreceived="20100531113614" -->
<!-- sent="Mon, 31 May 2010 13:37:00 +0200" -->
<!-- isosent="20100531113700" -->
<!-- name="guillaume ranquet" -->
<!-- email="guillaume.ranquet_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager." -->
<!-- id="4C039F5C.50801_at_inria.fr" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager.<br>
<strong>From:</strong> guillaume ranquet (<em>guillaume.ranquet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-31 07:37:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13190.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13188.php">Jos&#233; Ignacio Aliaga Estell&#233;s: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13190.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13190.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi,
<br>
I'm new to the list and quite new to the world of MPI.
<br>
<p>a bit of background:
<br>
I'm a sysadmin and have to provide a working environment (debian base)
<br>
for researchers to work with MPI : I'm _NOT_ an open-mpi user - I know
<br>
C, but that's all.
<br>
<p>I compile openmpi with the following selectors: --prefix=/usr
<br>
- --with-openib=/usr --with-mx=/usr
<br>
(yes, everything goes in /usr)
<br>
<p>when running an mpi application (any application) on a machine equipped
<br>
with infiniband hardware, I get a segmentation fault during the
<br>
MPI_Finalise()
<br>
the code just runs fine on machines that have no Infiniband devices.
<br>
<p>&lt;code&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p><p>int main (int argc,char *argv[])
<br>
{
<br>
&nbsp;&nbsp;int i=0,rank, size;
<br>
<p>&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);      /* starts MPI */
<br>
&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);        /* get current process id */
<br>
&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;size);        /* get number of
<br>
processes */
<br>
while (i == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(5);
<br>
&nbsp;&nbsp;printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
&lt;/code&gt;
<br>
<p>my gdb-fu is quite rusty, but I get the vague idea it happens somewhere
<br>
in the MPI_Finalize(); (I can probably dig a bit there to find exactly
<br>
where, if it's relevant)
<br>
<p>I'm running it with:
<br>
$ mpirun --mca orte_base_help_aggregate 0 --mca plm_rsh_agent oarsh
<br>
- -machinefile nodefile ./mpi_helloworld
<br>
<p><p>after various tests I've been suggested to try recompiling openmpi with
<br>
the --without-memory-manager selector.
<br>
it actually solves the issue and everything runs fine.
<br>
<p>from what I understand (correct me if I'm wrong) the &quot;memory manager&quot; is
<br>
used with Infiniband RDMA to have a somewhat persistant memory region
<br>
available on the device instead of destroying/recreating it everytime.
<br>
and thus, it's only a &quot;performance tunning&quot; issue, that disables the
<br>
openmpi &quot;leave_pinned&quot; option?
<br>
<p>the various questions I have:
<br>
is this bug/behaviour known?
<br>
if so, is there a better workaround?
<br>
as I'm not an openmpi user, I don't really know if it's considered
<br>
acceptable to have this option disabled?
<br>
does the list want more details on this bug?
<br>
<p><p>thanks,
<br>
Guillaume Ranquet.
<br>
Grid5000 support-staff.
<br>
-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v2.0.15 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iQEcBAEBAgAGBQJMA59cAAoJEEzIl7PMEAli4EEH/AuR6swdZon43UnPPWt342tS
<br>
Eyl6KYRR9PHJw0OEhg4BjOIZYHrMlPYBaD7vzTdMJ7uNXw2F12VpsZgcf2YGgpK1
<br>
Ww8TwWz18tkG05GUErHph8yA3nskIUsWy2zzuiHxHD5h4v1bEhaZGDdGXTuv3aTE
<br>
a+9ENTtzSIcI2sXdLHZLjSqlOe2/c6d/mC+9wXGpSx8A48xMyqUegPRcyumIp443
<br>
OG1ldSRpICL9FnSrgr3SbF2b7/nlLRDVOC2qmf1SGWw3sP4Bqpda8rKRBvTLAPTk
<br>
vXC65+SAAXhGXhm6DAA5FKIicqMKe1NdgC4qPnu4jtiHXWL8fADBsjk8h3UReAY=
<br>
=xENR
<br>
-----END PGP SIGNATURE-----
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13189/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13190.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13188.php">Jos&#233; Ignacio Aliaga Estell&#233;s: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13190.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13190.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager."</a>
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
