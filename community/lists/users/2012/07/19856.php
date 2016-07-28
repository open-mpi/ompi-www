<?
$subject_val = "Re: [OMPI users] compilation on windows 7 64-bit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 27 15:44:04 2012" -->
<!-- isoreceived="20120727194404" -->
<!-- sent="Fri, 27 Jul 2012 15:43:55 -0400" -->
<!-- isosent="20120727194355" -->
<!-- name="Sayre, Alan N" -->
<!-- email="ansayre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation on windows 7 64-bit" -->
<!-- id="A0B7B1B714BA7249B20BAA55F3F4CD610172963C_at_barbpo5.bwes.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5012C15A.6010301_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compilation on windows 7 64-bit<br>
<strong>From:</strong> Sayre, Alan N (<em>ansayre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-27 15:43:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19857.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Previous message:</strong> <a href="19855.php">DongInn Kim: "[OMPI users] Testing"</a>
<li><strong>In reply to:</strong> <a href="19854.php">Tim Prince: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim,

 

Thanks for pointing this out (and thanks also to Shiqing and Damien
under separate cover). I created a new project which uses the WIN64
preprocessor flag and the changed the machinetype from x86 to x64 in the
linker and my app compiles/links and runs successfully.

 

Thanks Again,

 

Alan

 

From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Tim Prince
Sent: Friday, July 27, 2012 12:27 PM
To: users_at_[hidden]
Subject: Re: [OMPI users] compilation on windows 7 64-bit

 

On 07/27/2012 12:23 PM, Sayre, Alan N wrote: 

During compilation I get warning messages such as :

 

c:\program files
(x86)\openmpi_v1.6-x64\include\openmpi/ompi/mpi/cxx/op_inln.h(148):
warning C4800: 'int' : forcing value to bool 'true' or 'false'
(performance warning)

  cmsolver.cpp

 

 

Which indicates that the openmpi version &quot;openmpi_v1.6-x64&quot; is 64 bit.
And I'm sure that I installed the 64 bit version. I am compiling on a 64
bit version of Windows 7.

 

 

setting X64 compiler project options?



-- 
Tim Prince


-----------------------------------------
This message is intended only for the individual or entity to which
it is addressed and contains information that is proprietary to The
Babcock &amp; Wilcox Company and/or its affiliates, or may be otherwise
confidential.  If the reader of this message is not the intended
recipient, or the employee agent responsible for delivering the
message to the intended recipient, you are hereby notified that any
dissemination, distribution or copying of this communication is
strictly prohibited.  If you have received this communication in
error, please notify the sender immediately by return e-mail and
delete this message from your computer.  Thank you.
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19856/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19857.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Previous message:</strong> <a href="19855.php">DongInn Kim: "[OMPI users] Testing"</a>
<li><strong>In reply to:</strong> <a href="19854.php">Tim Prince: "Re: [OMPI users] compilation on windows 7 64-bit"</a>
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
