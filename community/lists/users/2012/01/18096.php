<?
$subject_val = "[OMPI users] Can we avoid derived datatypes?: Update!";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  5 05:35:19 2012" -->
<!-- isoreceived="20120105103519" -->
<!-- sent="Thu, 5 Jan 2012 10:35:14 +0000 (GMT)" -->
<!-- isosent="20120105103514" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="[OMPI users] Can we avoid derived datatypes?: Update!" -->
<!-- id="1325759714.44380.YahooMailNeo_at_web29605.mail.ird.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1325694715.47225.YahooMailNeo_at_web29603.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Can we avoid derived datatypes?: Update!<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-05 05:35:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18097.php">Jeff Squyres: "Re: [OMPI users] Can we avoid derived datatypes?: Update!"</a>
<li><strong>Previous message:</strong> <a href="18095.php">Venkateswara Rao Dokku: "[OMPI users] Issue with Open -MPI while running intel IMB benchmarks"</a>
<li><strong>In reply to:</strong> <a href="18093.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18097.php">Jeff Squyres: "Re: [OMPI users] Can we avoid derived datatypes?: Update!"</a>
<li><strong>Reply:</strong> <a href="18097.php">Jeff Squyres: "Re: [OMPI users] Can we avoid derived datatypes?: Update!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,

I read a little more about MPI derived data types, and to answer my own question:

In general, we cannot assume portability of sending a C/C++ struct as a stream of bytes. There must be a promise that data representation on machines involved in the transmission must perform the same data layout. 


Also, there was a +1 on using derived data types in terms of clarity of code.

But, now that I decided to use it, I run into another problem.

I have a function that commits the new datatype: Add_New_MPITypes(). This is called just after MPI_Init(...).
After a few subsequent function calls, I am doing MPI-Send/Receive in another function, which looks like:

void sendMessagetoSlave(void* Payload, int MESSAGETYPE)
{
&#194;&#160;&#194;&#160;&#194;&#160; switch (MESSAGETYPE)
&#194;&#160;&#194;&#160;&#194;&#160; {
&#194;&#160;&#194;&#160;&#194;&#160; case MSGINSTALLP:
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; {
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; //Add_MPI_msgInstallP_Type(); /*Was already done in Add_New_MPITypes() */
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; msgInstallP InstallPMessage;
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; InstallPMessage = *(msgInstallP*)Payload;
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; MPI_Ssend(
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; (void*)Payload,&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; /* Payload */
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; sizeof(msgInstallP),&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; /* size of the payload */
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; MPI_MSGINSTALLP,&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; /* MPI Data type */
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; InstallPMessage.location,&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; /* location to which the message is being sent */
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; MASTERSLAVECONTROLMESSAGE,&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; /* Tag */
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; MPI_COMM_WORLD&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; /* Communicator */
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; );
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; }
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; break;

&#194;&#160;&#194;&#160;&#194;&#160; default:
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; break;
&#194;&#160;&#194;&#160;&#194;&#160; }
}


The linker complains that it does not know MPI_MSGINSTALLP derived datatype. Specifically, the message from the linker is:

&quot;&#226;&#128;&#152;MPI_MSGINSTALLP&#226;&#128;&#153; was not declared in this scope&quot;.

I have using mpic++ (1.4.2) to compile, and g++ (4.5.3) to link.

Can anyone help?

Best.


Devendra


________________________________
 From: devendra rai &lt;rai.devendra_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Wednesday, 4 January 2012, 17:31
Subject: [OMPI users] Can we avoid derived datatypes?
 

Hello All,

I need to send a struct- datatype over MPI. Currently, I send the strcture as a series of MPI_BYTEs and on the other end, I dereference it as though it were a struct- type.

Something like this:

MPI_Ssend((void*)&amp;MasterSlavePayload, sizeof(MasterSlavePayload), MPI_BYTE, destNode,MASTERSLAVECONTROLMESSAGE,MPI_COMM_WORLD);

where MasterSlavePayload is a structure variable.


This currently seems to work, where we have a homogenous environment: same hardware configuration, and same operating system.

The question is: Is this approach portable? Safe? And whether this will work on a
 system of nodes with mixed processor types?

I read from MPI tutorials

&quot;...Primitive data types are contiguous. Derived data types allow you to  specify non-contiguous data in a convenient manner and to treat it as  though it was contiguous. &quot;

So, since I am using a primitive data type, does it mean that the packing of elements is maintained across the MPI_Send/MPI_Recv process? If so, it would mean that the approach that I use should work.

Any ideas?

Thanks a lot,

best

Devendra



_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18096/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18097.php">Jeff Squyres: "Re: [OMPI users] Can we avoid derived datatypes?: Update!"</a>
<li><strong>Previous message:</strong> <a href="18095.php">Venkateswara Rao Dokku: "[OMPI users] Issue with Open -MPI while running intel IMB benchmarks"</a>
<li><strong>In reply to:</strong> <a href="18093.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18097.php">Jeff Squyres: "Re: [OMPI users] Can we avoid derived datatypes?: Update!"</a>
<li><strong>Reply:</strong> <a href="18097.php">Jeff Squyres: "Re: [OMPI users] Can we avoid derived datatypes?: Update!"</a>
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
