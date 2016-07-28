<?
$subject_val = "Re: [OMPI users] requirement on ssh when run openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 28 23:49:09 2013" -->
<!-- isoreceived="20130729034909" -->
<!-- sent="Mon, 29 Jul 2013 06:48:50 +0300" -->
<!-- isosent="20130729034850" -->
<!-- name="dani" -->
<!-- email="dani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] requirement on ssh when run openmpi" -->
<!-- id="51F5E622.2080800_at_letai.org.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c737607.41b5.140282794ba.Coremail.qsmeng_at_126.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] requirement on ssh when run openmpi<br>
<strong>From:</strong> dani (<em>dani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-28 23:48:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22405.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Previous message:</strong> <a href="22403.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>In reply to:</strong> <a href="22402.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22405.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Reply:</strong> <a href="22405.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<html style="direction: ltr;">
  <head>
    <meta content="text/html; charset=ISO-8859-1"
      http-equiv="Content-Type">
    <style type="text/css">body p { margin-bottom: 0cm; margin-top: 0pt; } </style>
  </head>
  <body style="direction: ltr;"
    bidimailui-detected-decoding-type="latin-charset" text="#000000"
    bgcolor="#FFFFFF">
    But that is not a requirement on ssh.<br>
    That is a requirement on the install base on the second node - both
    must have the same environment variables set, using same paths on
    each machine.<br>
    either install openmpi on each node, and setup&nbsp;
    /etc/profile.d/openmpi.{c,}sh and /etc/ld.so.conf.d/openmpi.conf
    files on both (preferred) or install to a common file system (e.g.
    nfs mount) and still use profile and ldconfig to setup environment.<br>
    <br>
    <div class="moz-cite-prefix">On 29/07//2013 05:00, meng wrote:<br>
    </div>
    <blockquote
      cite="mid:c737607.41b5.140282794ba.Coremail.qsmeng@126.com"
      type="cite">
      <div
        style="line-height:1.7;color:#000000;font-size:14px;font-family:arial">Dear
        Reuti,<br>
        &nbsp; Thank you for the reply.<br>
        &nbsp; In examples directory on the computer c1, command "mpiexec -np
        4 hello_c" is correctly executed.<br>
        &nbsp;If I run " mpiexec -machinefile hosts hello_c " on computer c1,
        where hosts contains two line :<br>
        "&nbsp; node3<br>
        &nbsp; localhost<br>
        "<br>
        the screen displays as follows:<br>
        bash: orted: command not found<br>
--------------------------------------------------------------------------<br>
        A daemon (pid 5247) died unexpectedly with status 127 while
        attempting<br>
        to launch so we are aborting.<br>
        <br>
        There may be more information reported by the environment (see
        above).<br>
        <br>
        This may be because the daemon was unable to find all the needed
        shared<br>
        libraries on the remote node. You may set your LD_LIBRARY_PATH
        to have the<br>
        location of the shared libraries on the remote nodes and this
        will<br>
        automatically be forwarded to the remote nodes.<br!>--------------------------------------------------------------------------<br>
--------------------------------------------------------------------------<br>
          mpiexec noticed that the job aborted, but has no info as to
          the process<br>
          that caused that situation.<br>
          &nbsp; I dont know whats wrong with it.<br>
          &nbsp; Thank you.<br>
          &nbsp;Regards,<br>
          Meng<br>
          <br>
          <br>
          <br>
          <pre>
At&nbsp;2013-07-27&nbsp;16:44:56,Reuti&nbsp;<a class="moz-txt-link-rfc2396E" href="mailto:reuti@staff.uni-marburg.de">&lt;reuti@staff.uni-marburg.de&gt;</a>&nbsp;wrote:
&gt;Hi,
&gt;
&gt;Am&nbsp;27.07.2013&nbsp;um&nbsp;08:48&nbsp;schrieb&nbsp;meng:
&gt;
&gt;&gt;&nbsp;&nbsp;&nbsp;&nbsp;what&nbsp;'s&nbsp;the&nbsp;requriement,&nbsp;especially&nbsp;on&nbsp;ssh,&nbsp;to&nbsp;run&nbsp;openmpi?&nbsp;I&nbsp;have&nbsp;two&nbsp;computers,&nbsp;say&nbsp;c1&nbsp;and&nbsp;c2.&nbsp;Through&nbsp;ssh,&nbsp;c1&nbsp;can&nbsp;access&nbsp;c2&nbsp;without&nbsp;password,&nbsp;but&nbsp;c2&nbsp;can't&nbsp;access&nbsp;c1.&nbsp;Under&nbsp;this&nbsp;environment,&nbsp;can&nbsp;I&nbsp;use&nbsp;openmpi&nbsp;to&nbsp;compute&nbsp;parallely?&nbsp;
&gt;
&gt;as&nbsp;long&nbsp;as&nbsp;you&nbsp;execute&nbsp;`mpiexec`&nbsp;only&nbsp;on&nbsp;c1,&nbsp;it&nbsp;should&nbsp;work.&nbsp;But&nbsp;you&nbsp;can't&nbsp;start&nbsp;a&nbsp;job&nbsp;on&nbsp;c2.
&gt;
&gt;--&nbsp;Reuti
&gt;
&gt;
&gt;&gt;&nbsp;&nbsp;Regards,
&gt;&gt;&nbsp;meng
&gt;&gt;&nbsp;
&gt;&gt;&nbsp;
&gt;&gt;&nbsp;_______________________________________________
&gt;&gt;&nbsp;users&nbsp;mailing&nbsp;list
&gt;&gt;&nbsp;<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
&gt;&gt;&nbsp;<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt;_______________________________________________
&gt;users&nbsp;mailing&nbsp;list
&gt;<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
&gt;<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
        </br!></div>
      <br>
      <br>
      <span title="neteasefooter"><span id="netease_mail_footer"></span></span>
      <br>
      <fieldset class="mimeAttachmentHeader"></fieldset>
      <br>
      <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></pre>
    </blockquote>
    <br>
  </body>



<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22404/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22405.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Previous message:</strong> <a href="22403.php">Yuping Sun: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>In reply to:</strong> <a href="22402.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22405.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Reply:</strong> <a href="22405.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
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
