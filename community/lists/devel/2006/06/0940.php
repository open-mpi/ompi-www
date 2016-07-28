<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 15 10:13:06 2006" -->
<!-- isoreceived="20060615141306" -->
<!-- sent="Thu, 15 Jun 2006 10:12:55 -0400" -->
<!-- isosent="20060615141255" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Mails to open-mpi.org yesterday" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF9F22B7_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-15 10:12:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0941.php">Ralf Wildenhues: "[OMPI devel] tests/datatype: srandomdev"</a>
<li><strong>Previous message:</strong> <a href="0939.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Q: Job scheduling of MPI applications? (in general)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Several mails sent to Open MPI mailing lists were lost yesterday due to
<br>
a misconfiguration of the mailing list server.  It started sometime late
<br>
afternoon, Indiana time and has since been fixed.  You may have gotten
<br>
bounce messages if you tried to mail one of the lists directly.
<br>
<p>No SVN information was lost -- just the confirmation e-mails to the
<br>
mailing lists.  As far as I can tell, here are the messages that were
<br>
dropped from the list on the trunk and v1.1 branches:
<br>
<p>------------------------------------------------------------------------
<br>
r10374 | bosilca | 2006-06-14 23:21:16 -0700 (Wed, 14 Jun 2006) | 2
<br>
lines
<br>
Changed paths:
<br>
&nbsp;&nbsp;&nbsp;M /trunk/test/datatype/checksum.c
<br>
<p>Even moe complex. Now we do the unpacking using 2 iovecs. And still
<br>
working ...
<br>
<p>------------------------------------------------------------------------
<br>
r10373 | bosilca | 2006-06-14 23:07:11 -0700 (Wed, 14 Jun 2006) | 2
<br>
lines
<br>
Changed paths:
<br>
&nbsp;&nbsp;&nbsp;M /trunk/test/datatype/checksum.c
<br>
<p>An updated version with a behavior closer to the buffered send.
<br>
<p>------------------------------------------------------------------------
<br>
r10372 | bosilca | 2006-06-14 22:28:17 -0700 (Wed, 14 Jun 2006) | 7
<br>
lines
<br>
Changed paths:
<br>
&nbsp;&nbsp;&nbsp;M /trunk/test/datatype/Makefile.am
<br>
&nbsp;&nbsp;&nbsp;A /trunk/test/datatype/checksum.c
<br>
<p>Add a checksum test. It allow to check if the same operation
<br>
(pack/unpack)
<br>
done with the same values on 2 different types return the same value.
<br>
The 2
<br>
types belong to 2 differents classes: contiguous and sparse. With this
<br>
test
<br>
I simulate the behavior of the buffered send, where the sender send the
<br>
data from the user attached buffer (which is contiguous) and the
<br>
receiver
<br>
receive it in a sparse type.
<br>
<p>------------------------------------------------------------------------
<br>
r10368 | bosilca | 2006-06-14 20:28:23 -0700 (Wed, 14 Jun 2006) | 2
<br>
lines
<br>
Changed paths:
<br>
&nbsp;&nbsp;&nbsp;M /trunk/ompi/datatype/dt_module.c
<br>
<p>Change the name of one of the datatype parameters to match all the
<br>
others.
<br>
<p>------------------------------------------------------------------------
<br>
r10367 | bosilca | 2006-06-14 20:27:37 -0700 (Wed, 14 Jun 2006) | 5
<br>
lines
<br>
Changed paths:
<br>
&nbsp;&nbsp;&nbsp;M /trunk/ompi/datatype/datatype_checksum.h
<br>
<p>Do not sum the checksum. Instead use the intermediary values in order to
<br>
correctly compute the final checksum. This is not a bug in the case
<br>
where
<br>
both the sender and the receiver execute EXACTLY the same checksum
<br>
computations but is definitively a problem if not (such as the buffered
<br>
case).
<br>
<p>------------------------------------------------------------------------
<br>
r10366 | bosilca | 2006-06-14 20:24:19 -0700 (Wed, 14 Jun 2006) | 3
<br>
lines
<br>
Changed paths:
<br>
&nbsp;&nbsp;&nbsp;M /trunk/ompi/datatype/convertor.c
<br>
<p>Do not unpack outside the legal boundaries of the data even if the
<br>
specified
<br>
iov_len is larger than the amount of missing data.
<br>
<p>------------------------------------------------------------------------
<br>
r10365 | bosilca | 2006-06-14 20:22:28 -0700 (Wed, 14 Jun 2006) | 2
<br>
lines
<br>
Changed paths:
<br>
&nbsp;&nbsp;&nbsp;M /trunk/ompi/mpi/c/unpack.c
<br>
<p>Pedantic ...
<br>
<p>------------------------------------------------------------------------
<br>
r10364 | bosilca | 2006-06-14 20:21:54 -0700 (Wed, 14 Jun 2006) | 3
<br>
lines
<br>
Changed paths:
<br>
&nbsp;&nbsp;&nbsp;M /trunk/ompi/mpi/c/type_create_subarray.c
<br>
<p>Correctly compute the boundaries for the Fortran matrix style.
<br>
<p><p>------------------------------------------------------------------------
<br>
r10363 | jsquyres | 2006-06-14 17:10:11 -0700 (Wed, 14 Jun 2006) | 3
<br>
lines
<br>
Changed paths:
<br>
&nbsp;&nbsp;&nbsp;M /branches/v1.1/VERSION
<br>
<p>i think that i shall never see
<br>
a tree as fine as 1.1b3
<br>
<p>------------------------------------------------------------------------
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0941.php">Ralf Wildenhues: "[OMPI devel] tests/datatype: srandomdev"</a>
<li><strong>Previous message:</strong> <a href="0939.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Q: Job scheduling of MPI applications? (in general)"</a>
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
