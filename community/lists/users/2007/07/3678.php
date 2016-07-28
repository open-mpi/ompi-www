<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 16 00:05:38 2007" -->
<!-- isoreceived="20070716040538" -->
<!-- sent="Mon, 16 Jul 2007 12:05:32 +0800" -->
<!-- isosent="20070716040532" -->
<!-- name="Isaac Huang" -->
<!-- email="iclaymore_at_[hidden]" -->
<!-- subject="[OMPI users] end-to-end data reliability" -->
<!-- id="d2bbffd00707152105g37ffebd7x9b4c0203c4d6bee6_at_mail.gmail.com" -->
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
<strong>From:</strong> Isaac Huang (<em>iclaymore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-16 00:05:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3679.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Previous message:</strong> <a href="3677.php">Jeff Squyres: "Re: [OMPI users] Problem compiling openmpi-1.2.3 on Core 2 Duo with icc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3680.php">Brian Barrett: "Re: [OMPI users] end-to-end data reliability"</a>
<li><strong>Reply:</strong> <a href="3680.php">Brian Barrett: "Re: [OMPI users] end-to-end data reliability"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, I read from the FAQ that current Open MPI releases don't
<br>
support end-to-end data reliability. But I still have some confusing
<br>
that can't be solved by googling or reading the FAQ:
<br>
<p>1. I read from &quot;MPI - The Complete Reference&quot; that &quot;MPI provides the
<br>
user with reliable message transmission. A message sent is always
<br>
received correctly, and the user does not need to check for
<br>
transmission errors, timeouts, or other error conditions.&quot; But the
<br>
standard is sort of vague about what exactly this &quot;reliable message
<br>
transmission&quot; is. Does it at least require reliable delivery? Or, does
<br>
Open MPI notice and re-transmit lost data?
<br>
<p>2. When a data corruption happens (in message data), is the data in
<br>
the message envelop still reliable? Or, does Open MPI or the MPI
<br>
standard guarantee data integrity of message envelops? I'm
<br>
particularly interested in MPI_TAG which I use to encode things.
<br>
<p>Thank You.
<br>
<p><pre>
-- 
Regards, Isaac
()  ascii ribbon campaign - against html e-mail
/\                        - against microsoft attachments
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3679.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Previous message:</strong> <a href="3677.php">Jeff Squyres: "Re: [OMPI users] Problem compiling openmpi-1.2.3 on Core 2 Duo with icc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3680.php">Brian Barrett: "Re: [OMPI users] end-to-end data reliability"</a>
<li><strong>Reply:</strong> <a href="3680.php">Brian Barrett: "Re: [OMPI users] end-to-end data reliability"</a>
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
