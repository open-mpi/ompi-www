<?
$subject_val = "Re: [OMPI devel] [OMPI users] cartofile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 12 13:12:30 2009" -->
<!-- isoreceived="20091012171230" -->
<!-- sent="Mon, 12 Oct 2009 10:13:30 -0700" -->
<!-- isosent="20091012171330" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] cartofile" -->
<!-- id="4AD363BA.6040904_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AB79760.4_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] cartofile<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-12 13:13:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6963.php">Terry Dontje: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Previous message:</strong> <a href="6961.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6963.php">Terry Dontje: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Reply:</strong> <a href="6963.php">Terry Dontje: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
This e-mail was on the users alias... see
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2009/09/10710.php">http://www.open-mpi.org/community/lists/users/2009/09/10710.php</a><br>
<br>
There wasn't much response, so let me ask another question.&nbsp; How about
if we remove the cartofile section from the DESCRIPTION section of the
OMPI mpirun man page?&nbsp; It's a lot of text that illustrates how to
create a cartofile without saying anything about why one would want to
go to the trouble.&nbsp; What does this impact?&nbsp; What does it change?&nbsp;
What's the motivation for doing this stuff?&nbsp; What's this stuff good for?<br>
<br>
Another alternative could be to move the cartofile description to a FAQ
page.<br>
<br>
The mpirun man page is rather long and I was thinking that if we could
remove some "low impact" stuff out, we could improve the overall
signal-to-noise ratio of the page.<br>
<br>
In any case, I personally would like to know what cartofiles are good
for.<br>
<br>
Eugene Loh wrote:
<blockquote cite="mid4AB79760.4@sun.com" type="cite">
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
Thank you, but I don't understand who is consuming this information for
what.&nbsp; E.g., the mpirun man page describes the carto file, but doesn't
give users any indication whether they should be worrying about this.<br>
  <br>
Lenny Verkhovsky wrote:
  <blockquote
 cite="mid453d39990909210146x15183d34sb278fb943f1ff50f@mail.gmail.com"
 type="cite">
    <div dir="ltr">
    <div>Hi Eugene,<br>
    </div>
    <div>carto file is a file with a staic graph topology of your node.</div>
    <div>in the opal/mca/carto/file/carto_file.h you can see example.</div>
    <div>( yes I know that , it should be help/man list :) )</div>
    <div>Basically it describes a map of your node and inside
interconnection.</div>
    <div>Hopefully it will be discovered automatically someday, </div>
    <div>but for now you can describe your node manually.</div>
    <div>Best regards&nbsp;</div>
    <div>Lenny.</div>
    <br>
    <div class="gmail_quote">On Thu, Sep 17, 2009 at 12:38 AM, Eugene
Loh <span dir="ltr">&lt;<a href="mailto:Eugene.Loh@sun.com">Eugene.Loh@sun.com</a>&gt;</span>
wrote:<br>
    <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">I
feel like I should know, but what's a cartofile? &nbsp;I guess you supply
"topological" information about a host, but I can't tell how this
information is used by, say, mpirun.<br>
    </blockquote>
    </div>
    </div>
  </blockquote>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6963.php">Terry Dontje: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Previous message:</strong> <a href="6961.php">Ralph Castain: "Re: [OMPI devel] binding with MCA parameters: broken or user error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6963.php">Terry Dontje: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Reply:</strong> <a href="6963.php">Terry Dontje: "Re: [OMPI devel] [OMPI users] cartofile"</a>
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
