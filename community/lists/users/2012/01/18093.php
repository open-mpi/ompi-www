<?
$subject_val = "[OMPI users] Can we avoid derived datatypes?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  4 11:32:01 2012" -->
<!-- isoreceived="20120104163201" -->
<!-- sent="Wed, 4 Jan 2012 16:31:55 +0000 (GMT)" -->
<!-- isosent="20120104163155" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="[OMPI users] Can we avoid derived datatypes?" -->
<!-- id="1325694715.47225.YahooMailNeo_at_web29603.mail.ird.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1325301698.59909.YahooMailNeo_at_web29602.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Can we avoid derived datatypes?<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-04 11:31:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18094.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="18092.php">devendra rai: "Re: [OMPI users] MPI::Request::Test not working"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18082.php">devendra rai: "[OMPI users] MPI::Request::Test not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18096.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?: Update!"</a>
<li><strong>Reply:</strong> <a href="18096.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?: Update!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,

I need to send a struct- datatype over MPI. Currently, I send the strcture as a series of MPI_BYTEs and on the other end, I dereference it as though it were a struct- type.

Something like this:

MPI_Ssend((void*)&amp;MasterSlavePayload, sizeof(MasterSlavePayload), MPI_BYTE, destNode,MASTERSLAVECONTROLMESSAGE,MPI_COMM_WORLD);

where MasterSlavePayload is a structure variable.


This currently seems to work, where we have a homogenous environment: same hardware configuration, and same operating system.

The question is: Is this approach portable? Safe? And whether this will work on a system of nodes with mixed processor types?

I read from MPI tutorials

&quot;...Primitive data types are contiguous. Derived data types allow you to  specify non-contiguous data in a convenient manner and to treat it as  though it was contiguous. &quot;

So, since I am using a primitive data type, does it mean that the packing of elements is maintained across the MPI_Send/MPI_Recv process? If so, it would mean that the approach that I use should work.

Any ideas?

Thanks a lot,

best

Devendra
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18093/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18094.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="18092.php">devendra rai: "Re: [OMPI users] MPI::Request::Test not working"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18082.php">devendra rai: "[OMPI users] MPI::Request::Test not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18096.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?: Update!"</a>
<li><strong>Reply:</strong> <a href="18096.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?: Update!"</a>
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
