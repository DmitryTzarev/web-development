PROGRAM PrintHello(INPUT, OUTPUT);
USES DOS;
BEGIN
  WRITELN('HTTP/1.1 200 OK');
  WRITELN('Content-Type:text/plain');
  WRITELN;
  WRITELN('REQUEST_METHOD:', GetEnv('REQUEST_METHOD'));
  WRITELN('QUERY_STRING:', GetEnv('QUERY_STRING'));
  WRITELN('CONTENT_LENGTH:', GetEnv('CONTENT_LENGTH'));
  WRITELN('HTTP_USER_AGENT:', GetEnv('HTTP_USER_AGENT'));
  WRITELN('HTTP_HOST:', GetEnv('HTTP_HOST'))
END.

